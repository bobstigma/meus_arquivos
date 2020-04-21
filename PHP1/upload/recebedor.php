<?php
echo "<pre>";
print_r($_FILES);

$permitidos = ['image/jpeg', 'image/jpg', 'image/png'];

if (in_array($_FILES['arquivo']['type'], $permitidos)) { //Validando os tipos de arquivos que serão aceitos no script
    $nome = md5(time() . rand(0, 1000)) . '.jpg'; //Gerando um nome aleatório utilizando do zero até o 1000 para não ter problema com arquivos duplicados
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' . $nome);
    echo "Arquivo salvo com sucesso!!";
}else{
    echo "Arquivo não permitido!!!! (Jpeg, Jpg, Png)";
}
