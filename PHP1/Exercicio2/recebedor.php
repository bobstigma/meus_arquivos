<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); //Limpando o input do formulário para não vir códigos

if($nome){
    $lista = file_get_contents('lista.txt'); //Criando o arquivo lista.txt
    $lista .= $nome .'\n';

    file_put_contents('lista.txt', $lista); //Adicionando os nomes na lista
    header("Location: index.php"); //Redirecionando para o index.php após a inclusão
}else{
    header("Location: index.php");
    exit;
}