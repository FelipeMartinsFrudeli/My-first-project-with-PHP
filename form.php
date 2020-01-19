<!doctype html>
<html>
  <head>
    <title>Form</title>
 <meta charset="utf-8">
 </head>
 <body>
   
<br/>
<br/>

 <div>
<?php
$nome = ($_GET["nome"])? $_GET["nome"]:"[Não Informado]";
$ano = ($_GET["ano"])? $_GET["ano"]:0;
$sexo = isset($_GET["sexo"])? $_GET["sexo"]:"[Sem Sexo]";
$idade = date("Y") - $ano;
echo "<h3>$nome tem $idade anos, e é do sexo $sexo";
?>

<br/>
<br/>
<a href="index.html">Voltar</a>

</div>
 

</body>
</html>
