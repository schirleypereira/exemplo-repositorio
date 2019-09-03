<?php

# Questão 1
echo "<hr> 1) <br>";
$valor = 100;
$desconto=0.09;
echo "o valor sem desconto:".$valor;
 echo"<br> O valor com atual  com desconto é :" .$valor -=$desconto;
echo "<hr>";

 #  2
 echo "  2) <br>";
 $distancia=100;
 $combustivel=4;
 
echo "<br>O consumo medio do automovel é  de :". $distancia/$combustivel;

echo "<hr>";
echo "  3) <br>";
$litrosgastos=4;
 $km=100;
 $valorconbustivel=25;
 echo" valor gasto em reais com o conbustivel :" . $litrosgastos*$valorconbustivel;

 echo "<hr>";

 echo "  4) <br>";
$salario=800;
$carrosvendidos=2;
$comissao=300*$carrosvendidos;
if($carrosvendidos>=1) {
     echo "o valor do  salario com  $carrosvendidos carro vendido  é :".$salario+=$comissao;
} else  {
    echo " o valor do salario é " .$salario ;
} 
echo "<hr>";


echo " Tarefa 5) <br>";
$votostotal=300;
$votosnulo=75;
$votosvalidos=150;
$votosbrancos=75; 

 echo"o percentual de votos em branco é :". 100*$votosbrancos/$votostotal;
 echo"<br> o percentual de votos em nulos é :". 100*$votosnulo/$votostotal;
 echo"<br> o percentual de votos validos é:". 100*$votosvalidos/$votostotal ;