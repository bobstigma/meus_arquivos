<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);    //Valida para que não deixe rodar scripts
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);  //Validação de email
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT); //Validação de números inteiros apagando o que não for INT

//VALIDATE irá validara a varável e o SANITIZE fara uma limpeza 
if($nome && $email && $idade){

    $expiracao = time() + (86400 * 30); //Expiração valendo por 30 dias
    setcookie('nome', $nome, $expiracao); //Setando o cookie

    echo "Nome: " . $nome."<br/>";
    echo "Email: " . $email."<br/>";
    echo "Idade: " . $idade;


}else{
    $_SESSION['aviso'] = 'Preencha os itens corretamente!!';    //configurando a mensagem da sessão

    header("Location: index.php"); //So colocar o redirecionamento caso não tenha passado nenhum dado
    exit; //Para fazer o redirecionamento tem que colocar o exit para mandar para a página de desitno sem dados
}
