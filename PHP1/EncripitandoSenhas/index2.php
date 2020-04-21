<?php

$hash = '$2y$10$QnCIKK7NLYd1F41l9bB/Quds19dzNlPBdTk9oD31iaN4/jlJvZqf2';
$senha = '1234';

if(password_verify($senha, $hash)){
    echo 'Senha correta!';
}else{
    echo 'Senha incorreta!';
}
