<?php

require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){
    //Verificação do email se já existe
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0) {
       //PDO STATEMENT
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)"); //Fazendo o modelo da query
        $sql->bindValue(':name', $name); //o valor que está sendo atribuído na hora
        $sql->bindValue(':email', $email); //Esta associando a variável email
        $sql->execute(); //Executando a query 

        header("Location: index.php");
        exit;
    }else{
        header("Location: adicionar.php");
        exit;
    }  
}else{
    header("Location: adicionar.php");
    exit;
}