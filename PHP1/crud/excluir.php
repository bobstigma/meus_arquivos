<?php
require 'config.php';


$id = filter_input(INPUT_GET, 'id');

if ($id) {
    //Processo de exclusão do registro
    $sql =  $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header("Location: index.php");
exit;