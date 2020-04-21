<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if($nome){
    $expiracao = time() + (86400 * 30); //Expiração valendo por 30 dias
    setcookie('nome', $nome, $expiracao); //Setando o cookie

    echo 'Olá '. $nome;
    echo '<a href="apagar.php"> - SAIR</a>';

}