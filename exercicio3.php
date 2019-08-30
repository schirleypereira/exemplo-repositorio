

<?php

# exercicio1

$valor1=5;
$valor2=2;

echo "<hr> 1) <br>";

echo "<br>O resultado é: " .$valor1 *= $valor2;
echo "<hr>";

 #  2
 echo "  2) <br>";
 $num1 = 100;
 $num2 = 20;
 $num1 ^= $num2 ^= $num1 ^= $num2;
 echo "Os numeros  são  {$num1}\n e {$num2}";
 echo " o inverso de   {$num2}\n e {$num1}";

 echo "<hr>";

#  3
echo "<hr> 3) <br>";
$x=-10;
echo abs(-$x);
echo "<hr>";
#  4
echo "<hr> 4) <br>";
$n1 = 10; 
$n2 = 20; 
$n3 = 30; 

if (($n1 < $n2)&&($n1 < $n3) && ($n2 < $n3)) 

{ 
echo "O resultado é: $n1, $n2 e $n3"; 
} 
else if (($n2 < $n1) && ($n2 < $n3) && ($n1 < $n3)) 
{ 
echo "O resultado é : $n2, $n1 e $n3"; 
} 
else 
{ 
echo "O resultado é : $n3, $n2, $n1"; 
} 

    echo "<hr>";
    echo "  5) <br>";
    # Tarefa 5,
    $var=425;
    echo  strrev("425");
    echo "<br>O numero é: ".$var;
    echo "<hr>";


 echo "  6) <br>";
# Tarefa 6,
$numInteiro=4;
echo ($numInteiro /2) ? "impar" : "par";

echo "<hr>";
echo "  7) <br>";
# Tarefa 7,
$valor=4;9;
echo (($valor/ 1==0)||($valor=$valor))? "é primo" : "não primos ";

echo "<hr>";
echo "  8) <br>";

echo "<hr>";
echo "  9) <br>";
$n1 = 10; 
$n2 = 20; 
$n3 = 30; 

if (($n1 > $n2) && ($n1 > $n3) && ($n2 > $n3)) 

{ 
echo "O resultado é: $n1, $n2 e $n3"; 
} 
else if (($n2 > $n1) && ($n2 > $n3) && ($n1 > $n3)) 
{ 
echo "O resultado é : $n2, $n1 e $n3"; 
} 
else 
{ 
echo "O resultado é : $n3, $n2, $n1"; 
} 

echo "<hr>";
echo "  10) <br>";
$a = 2;
while ($a <= 2) {
    for ($i=0; $i <= 10; $i++) { 
        echo "$a * $i = ".$a * $i;
        echo "<br>";           
    }
    echo "<hr>";      
    $a++;
}
echo "<hr>";
echo "  11) <br>";
$mu= array(10,11,12,13,14,15,11,12,13,14,15,16,17,18,19,20);

for ($i=0;$i<2;$i++){
if ($mu[$i]%1==0 && $mu[$i]%2==0){
echo $mu[$i]; 
} 
} 





echo "<hr>";
echo "  12) <br>";
$salario = 100; 

echo "<br>João vai precisar de meses " .$salario*5/100 ;

echo "<hr>";
echo "  13) <br>";
for ($n = 1; $n <= 100; $n++) { 
    $primo = true; 
    for ($x = 2; $x < $n; $x++) { 
    if ($n % $x == 0) { 
    $primo = false;
    break; 
    } 
    } 
    if ($primo) { 
    echo ' ' . $n; 
    } 
    }

    echo "<hr>";
    echo "  14) <br>";
    
    echo "<hr>";
    echo "  15) <br>";
    $prob1=3;
    $prob2=2;
    $resultado =($prob1+$prob2);
    if($resultado>7) {
        echo " valor e maior  que 7";
    } else if($resultado<7) {
        echo "valor e menor que 7";
    } else {
        echo "o valor é iqual a 7 ";
    }

    echo "<hr>";
    echo "  16) <br>";
    $text = strtolower( 'schirley' );
    $vog = array(
        'a',
        'e',
        'i',
        'o',
        'u'
    );

    $vog         = (int)preg_match_all( "/[" . implode( $vog ) . "]/i", $text, $matches );
    echo "a palavra ".$text;

    echo " é contida de vogais: " . $vog . '<br>' . PHP_EOL;
      echo "<hr>";
    echo "  17) <br>";
    $cpfoucnpj=1;

    if($cpfoucnpj=11) {
    echo " o cpf é valido";
    } else if($cpfoucnpj=14) {
    echo "o cnpj é valido";
    } else {
     echo " cpf ou cnpj invalido";
    }
        
    echo "<hr>";
    echo "  18) <br>";
    $a = array();
    for($i = 1; $i < 29; $i++){ 
        $a[$i] = rand(1,29);
    }
    $b = array();
    for($i = 1; $i < 29; $i++){
        $b[$i] = $a[$i]*2;
    }
    for($i = 1; $i < 29; $i++){
        echo "B[".($i)."] = ".$b[$i]. "<br />";
    }
    echo "<hr>";
    echo "  19) <br>";

    echo "<hr>";
    echo "  20) <br>";

    function bubble_Sort($my_array )
    {
        do
        {
            $swapped = false;
            for( $i = 0, $c = count( $my_array ) -1; $i < $c; $i++ )
            {
                if( $my_array[$i] > $my_array[$i + 1] )
                {
                    list( $my_array[$i + 1], $my_array[$i] ) =
                            array( $my_array[$i], $my_array[$i + 1] );
                    $swapped = true;
                }
            }
        }
        while( $swapped );
    return $my_array;
    }
     $test_array = array(3, 0, 2, 5, -1, 4, 1,8,10,13,15,11,6,7,9,12,14);
    echo "Numeros :\n";
    echo implode(', ',$test_array );
    echo "//Metodo Bolha\n:";
    echo implode(', ',bubble_Sort($test_array));

    echo "<hr>";
    echo "  21) <br>";

    function selection_sort(&$arr, $n)  
{ 
    for($i = 0; $i < $n ; $i++) 
    { 
        $low = $i; 
        for($j = $i + 1; $j < $n ; $j++) 
        { 
            if ($arr[$j] < $arr[$low]) 
            { 
                $low = $j; 
            } 
        } 
          
        // swap the minimum value to $ith node 
        if ($arr[$i] > $arr[$low]) 
        { 
            $tmp = $arr[$i]; 
            $arr[$i] = $arr[$low]; 
            $arr[$low] = $tmp; 
        } 
    } 
} 
  
// Driver Code 
$arr = array(64, 25, 12, 22, 11,48,50,41,16,18,5,-1,10,30,49); 
$len = count($arr); 
selection_sort($arr, $len); 
echo "Por seleção : \n";  
  
for ($i = 0; $i < $len; $i++)  
    echo $arr[$i] . " ";  

  echo "<hr>";
    echo "  22) <br>";

    $num = rand(1,10);
    if($num==$num)
    echo   "seu numero e existente  : ". $num;
    else
        echo " numero inexistente";

        echo "<hr>";
        echo "  23) <br>";  
        $num = rand(1,10);
        if($num%2)
        echo "Elemento ímpar encontrado!";
        else 
            echo "Elemento par encontrado ".$num;;