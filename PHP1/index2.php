<?php
/* $ingredientes = [
    'açucar', 
    'farinha de trigo', 
    'ovo', 
    'leite', 
    'fermento em pó'
];

echo $ingredientes [4] . "<br/>";

$numerosDaMegaSena = [10, 14, 27, 34, 8]; */

//Array Spread (7.4) só funciona apartir dessa versão

/* echo "Primeiro número: " . $numerosDaMegaSena[0] . "<br/>";
echo "Segundo número: " . $numerosDaMegaSena[1] . "<br/>";


$lista1 = ['bonieky', 'pedro', 'joão'];
$lista1 = ['patricia', 'fabricia', 'melissa'];
$lista3 = [...$lista1, ...$lisa2];

print_r($lista3); */

//Exercicio

/* $lista = [
    'nome' => 'Bob',
    'idade' => 35,
    'atributos' => [
        'forca' => 70,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana '=> 928
];

echo "NOME: ".$lista['nome']."<br/>";
echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
echo "VIDA: ".$lista['vida']; */

//Condicional IF

/* $idade = 16;

if($idade < 18) {
    echo "Menor de idade!";
}else{
    echo "Maior de idade!";
}
 */
//Condicional ternário
//(condição) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;

/* $idade = 18;
echo ($idade < 18) ? 'Menor de idade!' : 'Maior de idade!'; */

//Condicional null CAO

/* $nomeCompleto = $nome ?? 'visitante';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto; */

//Operador Switch (Não é tão utilizado)

/* $tipo = 'foto';

switch($tipo){
    case 'foto':
        echo 'Exibindo uma FOTO';
        break;
    case 'video':
        echo 'Exibindo uma VIDEO';
        break;
    case 'texto':
        echo 'Exibindo uma TEXTO';
        break;
} */

//Loop WHILE

/* $numero = 0;

while ($numero < 10){
    echo "N: ". $numero."<br/>";

    $numero += 1;
} */

//Loop FOR

/* for ($numero = 0; $numero < 10; $numero += 1) {
    echo "N: " . $numero . "<br/>";
}

for ($i = 1; $i <= 10; $i++) {
    echo "N: " . $i . "<br/>";
}
 */

//Loop FOREACH para trabalhar com arrays

/* $ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó',
    'corante'
];

echo "<h2>Ingredientes</h2>";

echo '<ul>';
foreach ($ingredientes as $valor) {
    echo '<li>' . $valor . '</li>';
}
echo '</ul>'; */

/* //Exercício tracinho: fazer dez linhas com 10 tracinhos em cada só que só pode utilizar somente um traço


echo "<h4>01 - Exercício tracinho: fazer dez linhas com 10 tracinhos em cada só que só pode utilizar somente um traço</h4>";
$linha = 0;

while ($linha < 10) {
    for ($i = 1; $i <= 10; $i++) {
        echo "-";
    }
    echo "<br/>";
    $linha += 1;
}

//Exercicio: fazer 20 linhas adicionando um tracinho em cada uma, o primeiro não tem traço e o último tem 20.

echo "<h4>02 - Fazer 20 linhas adicionando um tracinho em cada uma, o primeiro não tem traço e o último tem 20.</h4>";
$linha = 0;

while ($linha <= 20) {
    for ($i = 0; $i < $linha; $i++) {
        echo "-";
    }
    echo "<br/>";
    $linha += 1;
} */

//Funções
//criando a função
/* function subsequente() {
    for ($q=0; $q < 10; $q++) { 
        echo $q."<br/>";
    }

    echo "<hr/>";
}
//executando a função
subsequente();
subsequente();
subsequente();

function latir(){
    echo"au au au <br/>";
}

for ($i=0; $i < 20; $i++) { 
    latir();
} */

//Parâmetro de funções

/* function somar($n1, $n2){
    $total = $n1 + $n2;
    return $total;
}

$soma = somar(10, 5);

echo "Total da soma: ".$soma; */

//Type e valor padrão

//Valor Padrão
/* function somar($n1, $n2, $n3 = 0){
    $total = $n1 + $n2 + $n3;
    return $total;
}

$x = somar(1, 3, 4);
$y = somar(5, 3, 4);
$w = somar($x, $y);

echo $w; */

//Type garante que dentro da função aceite somente o tipo de variavel declarada
/* function somar(int $n1, int $n2 = 0, int $n3 = 0){
    $total = $n1 + $n2 + $n3;
    return $total;
}

$z = somar(7, 3);
echo $z; */

//Parâmetro: Referência ou valor

//Passagem variável por valor
/* function somar($n1, $n2){
    $total = $n1 + $n2;
    return $total;
}

$x = 3;
$y = 2;
$soma = somar($x, $y);

echo "Total: ".$soma; */

//Passando variável por referência
/* function somar($n1, $n2, &$total){
    $total = $n1 + $n2;
}

$x = 3;
$y = 2;
$soma = 0;

somar($x, $y, $soma);

echo $x.'+'.$y.' = '.$soma; */

//Exemplo de pegando o valor por referencia nativa do PHP
/* $lista = [4, 9, 2];

sort($lista);

print_r($lista); */

//Funções anonimas, função que funciona normalmente mas sem nome.

/* $dizimo = function(int $valor){
    return $valor * 0.1;
};

$funcao = $dizimo;

echo $funcao(82); */

//Função Arrow php 7,4, usada quando tem somente uma função sendo executada

/* $dizimo = fn($valor) => $valor * 0.1;
$somar = fn(int $n1, int $n2) => $n1 + $n2;

echo $dizimo(120); */

//Funçoes recursivas, função que utiliza ela mesmo. Utilizado por exemplo em um sistema onde utliza localização de pastas

/* function dividir($numero){
    $metade = $numero / 2;
    echo $metade."<br/>";

    if(round($metade) > 0){
        dividir($metade);
    }
}

dividir(100); */

//Funções nativas matemáticas mais utilizadas

/* $numero = -8.4;
echo "<h4>Valor absoluto de um número abs() </h4>";
echo abs($numero)."<br/>"; //Valor absoluto de um número

echo "<h4>PI pi() </h4>";
echo pi()."<br/>"; //Exibe o pi

$numero = 2.7;
echo "<h4>Arredondar sempre para baixo floor() </h4>";
echo floor($numero)."<br/>"; //Arredondar sempre para baixo

$numero = 4.7;
echo "<h4>Arredondar sempre para cima ceil() </h4>";
echo ceil($numero)."<br/>"; //Arredondar sempre para cima

$numero = 4.21354;
echo "<h4>Arredondar dependendo do número round() </h4>";
echo round($numero, 2)."<br/>"; //Arredondar dependendo do número, o segundo parametro da função serve para precisar

echo "<h4>Gerar número aleatório rand() </h4>";
echo rand(0, 1000)."<br/>"; //gerar número aleatório, os parametros são o minimo e máximo

$lista = [1, 4, 9, 8];
echo "<h4>Saber o maior número de uma lista max() </h4>";
echo max($lista)."<br/>"; //Saber o maior número de uma lista

$lista = [1, 4, 9, 8];
echo "<h4>Saber o menor número de uma lista min() </h4>";
echo min($lista)."<br/>"; //Saber o min número de uma lista */

//Funções nativas de String


/* $nomeSujo = '              Bob             ';

echo "<h4>Função para remover spaços</h4>";
$nomeLimpo = trim($nomeSujo);//Função para remover spaços

echo "NOME SUJO: " . strlen($nomeSujo) . "<br/>"; //Mostra o tamanho da string
echo "NOME LIMPO: " . strlen($nomeLimpo) . "<br/>";

$nome = 'Wanderlei Augusto';
echo "<h4>Toda a string minuscula ou minuscula</h4>";
echo strtolower($nome) . "<br/>"; //Toda a string minuscula
echo strtoupper($nome) . "<br/>"; //Toda a string maiuscula

echo "<h4>Substituir uma parte da string</h4>";
$nomeAlterado = str_replace('a', '4', $nome) . "<br/>"; //Substituir uma parte da string
echo $nomeAlterado;

$nomeCompleto = 'Wanderlei Augusto';

echo "<h4>Mostra uma parte limitada da string</h4>";
$nome = substr($nomeCompleto, 3, 3); //Mostra uma parte limitada da string
echo $nome;

echo "<h4>Mostra a posição de algum caracter</h4>";
$posicao = strpos($nomeCompleto, 'a'); //Mostra a posição de algum caracter
echo $posicao;

echo "<h4>Transforma a primeira letra em maiuscula</h4>";
$nomeMin = 'wanderlei augusto';
echo ucfirst($nomeMin) . " - Primeira letra<br/>";//Primeira letra
echo ucwords($nomeMin) . " - Primeira letra de cada palavra.<br/>";//Primeira letra de cada palavra

echo "<h4>Coloca cada palavra de uma string em uma posição de um array</h4>";
$nomes = explode(' ', $nomeCompleto);
print_r($nomes);

echo "<h4>Formatar números</h4>";
$numero = 12913.12123;
echo "R$".number_format($numero, 1, ',','.'); */

//Funções nativas de Array

/* echo "<h4>Mostra a quantidade de itens em um array count()</h4>";
$lista = ['nome1','nome2','nome3', 'nome4', 'nome5'];
echo "TOTAL: " . count($lista);

echo "<h4>Mostra os itens que não tem na primeira lista array_diff()</h4>";
$lista = ['Bob','pedro','paulo', 'jose', 'francisca', 'paula'];
$aprovados = ['Bob','pedro', 'jose', 'francisca'];
$reprovados = array_diff($lista, $aprovados);
print_r($reprovados);

echo "<h4>Filtra todo o array e retorna o resultado de uma condição array_filter()</h4>";
$numeros = [10, 20, 24, 91, 18];
$filtrados = array_filter($numeros, function($item){
    if($item < 30){
        return true;
    }else{
        return false;
    }
});
print_r($filtrados);

echo "<h4>Mapeia todo o array e retorna o resultado de uma condição array_map()</h4>";
$numeros = [10, 20, 24, 91, 18];
$dobrados = array_map(function($item){
    return $item * 2;
}, $numeros);
print_r($dobrados);

echo "<h4>Array array_pop() e array_shift()</h4>";
$numeros = [10, 20, 24, 91, 18];
array_shift($numeros);//Remove a primeira posição do array
array_pop($numeros);//Remove a ultima posição do array
print_r($numeros);

echo "<h4>Função para buscar alguma coisa dentro do array array_shift()</h4>";
$numeros = [10, 20, 24, 91, 18];
if(in_array(91, $numeros)){
    echo "EXISTE";
}else{
    echo "NÂO EXISTE";
}

echo "<h4>Busca e mostra a posição do array array_search()</h4>";
$numeros = [10, 20, 24, 91, 18];
$pos = array_search(91, $numeros);
echo $pos;//se tiver ele mostra a posição caso contrário ele retorna false

echo "<h4>Ordenar o array array_sort()</h4>";
$numeros = [10, 20, 24, 91, 18];
sort($numeros);//Ordem crescente
echo"<br/>";
print_r($numeros);
arsort($numeros);//Ordem decrescente
echo"<br/>";
print_r($numeros);
asort($numeros);//Ordenar sem mudar a chave
echo"<br/>";
print_r($numeros);

echo "<h4>Juntar posições de um array implode()</h4>";
$nomes = ['Wanderlei', 'Augusto', 'de Sousa'];
$nome = implode('@', $nomes);
echo $nome; */

//Trabalhando com múltiplos arquivos
/* include('abc.php');//Não imprede de executar o resto do código
require('header.php');//imprede de executar o resto do código
require_once('config.php');//Carrega somente uma vez o arquivo


echo "Conteudo do site <br/>";
echo "Nome de usuário: " . $usuario; */

//Trabalhando com pastas diferentes
/* ?>

    <a href="paginas/home.php">HOME</a>
    <a href="paginas/sobre.php">SOBRE</a>; */

//HTTP REQUESTS
?>

<!-- POST vai para a pagina e envia internamente o GET envia pela URL, o padrão do PHP e GET e  se não tiver o action ele vai mostrar retornar para o proprio index-->
<!-- 
    
<?php
session_start();                //Iniciando a sessão

require('header.php');

if($_SESSION['aviso']){         //Exibindo a sessão
    echo $_SESSION['aviso'];    //Mostrando o que está armazenado na sessão
    $_SESSION['aviso'] = '';    //Esvaziando a sessão
}

?>

<a href="apagar.php">Apagar COOKIE</a>

<form method="POST" action="recebedor.php">
    <label>
        Nome:
        <br />
        <input type="text" name="nome" />
    </label>
    <br />
    <br />
    <label>
        Email:
        <br />
        <input type="text" name="email" />
    </label>
    <br />
    <br />
    <label>
        Idade:
        <br />
        <input type="text" name="idade" />
    </label>
    <br />
    <br />

    <input type="submit" value="Enviar" />
</form> -->

<?php

$texto = file_get_contents('texto.txt');
$texto = explode('\n', $texto);

echo "PARAGRAFOS: ". count($texto);
?>