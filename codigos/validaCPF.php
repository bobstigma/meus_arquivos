
<?php
//Valor qualquer assumido para teste
$cpf = 25565998719;
//Apresentação do resultado
echo 'CPF '.$cpf;
echo verificarCpf($cpf) ? ', caso exista, é válido!' :' Inválido!'  ;
//Função que valida um possível número de CPF (para que um CPF exista, além dos dígitos verificadores, o mesmo tem de estar
//cadastrado no banco de dados da Receita Federal)
function verificarCpf($cpf){
  //transforma a variável $cpf em um array de string
  $strCpf = str_split($cpf);
  /*O dígito verificado assume o valor do somatório da multipicaçao da posição do array pelo seu valor
   Ex.  Para o primeiro dígito
           A   B  C  D  E   F   G   H   I
         *10  *9 *8 *7  *6  *5  *4  *3  *2
         Para o segundo dígito
           A   B    C  D  E   F   G   H   I   j  
          *11  *10 *9 *8  *7  *6  *5  *4  *3  *2
  */
  for ($digito=1; $digito <=2 ; $digito++) { 
    $digitoVerificador = 0;
    foreach ( $strCpf as $key => $valor) {
      if ($key <= ($digito +7)) {
        $digitoVerificador += $valor * (($digito+9) - $key);
      }
    }
    //Pega o resto da divisão do digito verificado por onze, e verifica qual o valor (entre 0 e 9) esse digito verificador assumirá
    $resto = $digitoVerificador % 11;
        switch ($resto) {
        case '0':
          $digitoVerificador = 0;
          break;
        case '1':
          $digitoVerificador = 1;
          break;
        default:
          $digitoVerificador = 11 - $resto;
          break;
        }
        //compara o valor assumido pelo dígito verificado com o penúltimo (1. dígito) e o último(2.dígito) elementos do array $strCpf
        //caso algum deles seja diferente retorna 'false', ao contrário, se todos os dois dígitos com os valores respectivos do aray,
        // retorna 'true'.
        if ($digitoVerificador != $strCpf[($digito+8)]){
          return false;
        } 
      }
  return true;
}