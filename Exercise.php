<!DOCTYPE html>
<meta charset="Utf-8">
<html>

    <head>
<title>php</title>

    </head>
    <body>

 <style>
  *{
     font: 15px;
     color: #000;
     font-weight: bold;
 } 
     
     <h2>Coloque no URL: </h2>

<br/>


http://localhost/aula_php/tipo.php?a=40&b=67&op=m


<br/>
<br/>
<br/>


 </style>


    <h2>Operadores logicos, strings, numeros inteiros e flutuantes:</h2>

        <div>
            <?php
               $anos = 40;
               $nome = "Gustavo";
               echo "$nome tem $anos anos ";
            ?>
<br>
<br>
            <?php
               $n1 = $_GET["a"];
               $n2 = $_GET["b"];
               
               $soma = $n1 + $n2;

               $multiplicacao = $n1 * $n2;

               $divisao = $n1 / $n2;

               $modulo = $n1 % $n2;
               
               echo "<br/>O resultado da soma é: $soma"
?> <br/>
            <?php
               echo "<br/>O resultado da multiplicacao é: $multiplicacao";
?> <br/>            
            <?php
               echo "<br/>O resultado da divisao é: $divisao";
?> <br/>     
            <?php
               echo "<br/>O resultado do modulo é: $modulo";

?> <br/> 
            <?php
               echo "<br/>O valor de $n1 arredondado é: " .round($n1) ; //seil - arredonda pra cima.  floor - arredonda pra baixo.

?> <br/> 
            <?php
               echo "<br/>O valor absoluto de $n2 é: " .abs($n2);

?> <br/> 
            <?php
               echo "<br/>O valor de $n1<sup>$n2</sup> é: " .pow($n1, $n2);

?> <br/> 
            <?php
               echo "<br/>A raiz de $n1 é: " .sqrt($n1);

?> <br/> 
            <?php
               echo "<br/>A parte inteira de $n2 é: " .intval($n2);

?> <br/> 
            <?php
               echo "<br/>O valor de $n1 em moeda é: R$" .number_format($n1, 2);

?> <br/> 
<br/>
<br/>
<br/>

<br/>


and ou &&
<br/>
<br/>

   Verdadeiro   Verdadeiro   =   Verdadeiro
<br/>

   Verdadeiro     Falso   =   Falso
<br/>

   Falso    Verdadeiro    =    Falso
<br/>

   Falso       Falso     =     Falso

   <br/>
<br/>
<br/>
<br/>

   or ou ||
<br/>
<br/>

   Verdadeiro   Verdadeiro   =   Verdadeiro
<br/>

   Verdadeiro     Falso   =    Verdadeiro
<br/>

   Falso    Verdadeiro    =    Verdadeiro
<br/>

   Falso       Falso     =     Falso

   <br/>
<br/>
<br/>
<br/>

    xor
<br/>
<br/>

   Verdadeiro   Verdadeiro   =   Falso
<br/>

   Verdadeiro     Falso   =    Verdadeiro
<br/>

   Falso    Verdadeiro    =    Verdadeiro
<br/>

   Falso       Falso     =     Falso   

   <br/>
<br/>
<br/>
<br/>

    !
<br/>
<br/>   
   Verdadeiro = Falso
<br/>

    Falso = Verdadeiro

<br/>
    <br/>

<br/>
    <br/>

<h2>Ordem de precedência:</h2>


<br/>
Parentese: ( )
<br/>
<br/>
Multiplicação
<br/>
Divisão e modulo: * / %
<br/>
Adição e subtração: + -
<br/>
<br/>
<br/>
<br/>

<h2>operadores relacionais:</h2>
<br/>
Maior que: >
<br/>
Menor que: <
<br/>
<br/>
Maior ou igual: >=
<br/>
Menor ou igual: <=
<br/>
<br/>
Diferente: <> ou !=
<br/>
<br/>
Igual: = =
<br/>
Identico: = = =
<br/>
<br/>
<br/>
Operador Ternario:
<br/> 
<br/>
Expresão ? Verdadeiro : Falso
<br/>
<br/>
<br/>
exemplo:
<br/>
<br/>
<?php
$a = $_GET["a"];
$b = $_GET["b"];
$tipo = $_GET["op"];
$r = ($tipo == 's') ? $a+$b : $a*$b;
echo "O resultado é: $r"

?>
<br/>
<br/>
<br/>

<h2>Exercicio:</h2>
<br/>
<?php
$preco = $_GET['a'];
echo "Opreço do produto é: R$".number_format($preco, 2);
?><br/>
<?php
$a = $_GET['a'];
$a -= $a * 10/100;
echo "O preço de desconto em 10% é: R$" .number_format($a, 2)
?>

<br/>
<br/>

<h2>Variaveis referenciadas:</h2>

<?php
$a = 8;
$b = &$a;
$b += 3;
echo "variavel a = $a";
?><br/>
<?php
echo "variavel b = $b";
?>
<br/>
<br/>

<h2>Variaveis variantes:</h2>

<?php
$varABC = "abc";
$$varABC = "def";
echo $varABC;
echo $abc;
?>
      </div>
      <br/>
    </body>
</html>
