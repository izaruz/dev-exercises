<?php


// EJERCICIO 1
$valores = array(5,3);
$limite = 1000;

$multiplos = array();

for ($x = 1; $x < $limite; $x++) {
    
    foreach( $valores as $valor ){
        $mod = $x % $valor;
        if ( $mod == 0 ){
            array_push($multiplos, $x);
        }
    } 

}

echo array_sum($multiplos);


// EJERCICIO 2

$limite = 4000000;
$fPares = array();
$x = 0;

do {
    // Calcular Fibonacci de un numero
    $f = round(pow((sqrt(5)+1)/2, $x) / sqrt(5));
    if ($f % 2 == 0){
        array_push($fPares, $f);
    }
    $x++;

} while ($f < $limite);

echo array_sum($fPares);


// EJERCICIO 3

$valor = 600851475143;
$mayor = 0;

for ($j = 2; $j < $valor; $j++) { 
    if ( prime($j) && $valor % $j == 0) {
        $mayor = $j;
    }
}

echo $mayor;

// Identificar si un numero es primo
function prime($val){

    $c = 0;
    for ($i=2; $i <= $val ; $i++) { 
        if ($val % $i == 0) {
            if (++$c > 1) {
                return false;
            }
        }
    }
    return true;
}


// EJERCICIO 4

$ultimoPalindromo = 1;

for ($i=999; $i > 100 ; $i--) { 
    for ($j=999; $j > 100 ; $j--) { 
        $numero = $i*$j;
        // validar si es palindromo
        if ( palindromo($numero) ) {
            if ( $numero > $ultimoPalindromo ) {
                $ultimoPalindromo = $numero;
            }
        }
    }
}

echo $ultimoPalindromo;

function palindromo($num){
    if ((string)$num == strrev((string)$num)){
        return true;
    } else {
        return false;
    }
}


// EJERCICIO 5


$valor = 21;

while(!multiplo($valor)){
    $valor++;
}

echo $valor;

function multiplo($num){
    for($i = 1; $i <= 20; $i++){
        if(!($num % $i == 0)){
            return false;
        }
    }
    return true;
}


// EJERCICIO 6

$limite = 100;

$valor1 = 0;
for ($i=0; $i <= $limite ; $i++) { 
    $valor1 += + pow($i,2);    
}

$valor2 = 0;
for ($i=0; $i <= $limite ; $i++) { 
    $valor2 += + $i;
}
$valor2 = pow($valor2,2);

$resultado = $valor2 - $valor1;
echo $resultado;


// EJERCICIO 7

$valor = 1;
$res = 1;
 
while ($valor < 10001) {
    $res = $res + 2;
    if (esPrimo($res)) {
        $valor++;
    }
}

echo $res;

function esPrimo($num) {
    if ($num <= 1) {
        return false;
    }
    if($num == 2){
        return true;
    }
    if ($num % 2 == 0) {
        return false;
    }
 
    $x = 3;
    while (($x * $x) <= $num) {
        if ($num % $x == 0) {
            return false;
        } else {
            $x +=2;
        }
    }
 
    return true;
}


// EJERCICIO 8

$matrix = "73167176531330624919225119674426574742355349194934
        96983520312774506326239578318016984801869478851843
        85861560789112949495459501737958331952853208805511
        12540698747158523863050715693290963295227443043557
        66896648950445244523161731856403098711121722383113
        62229893423380308135336276614282806444486645238749
        30358907296290491560440772390713810515859307960866
        70172427121883998797908792274921901699720888093776
        65727333001053367881220235421809751254540594752243
        52584907711670556013604839586446706324415722155397
        53697817977846174064955149290862569321978468622482
        83972241375657056057490261407972968652414535100474
        82166370484403199890008895243450658541227588666881
        16427171479924442928230863465674813919123162824586
        17866458359124566529476545682848912883142607690042
        24219022671055626321111109370544217506941658960408
        07198403850962455444362981230987879927244284909188
        84580156166097919133875499200524063689912560717606
        05886116467109405077541002256983155200055935729725
        71636269561882670428252483600823257530420752963450";
 
$mayor = 0;
$valor = 0;
 
for ($i = 0; $i < strlen($matrix)-4; $i++) {

    $n1 = (int)(substr($matrix, $i, 1));
    $n2 = (int)(substr($matrix, $i+1, 1));
    $n3 = (int)(substr($matrix, $i+2, 1));
    $n4 = (int)(substr($matrix, $i+3, 1));
    $n5 = (int)(substr($matrix, $i+4, 1));

    $valor =  $n1 * $n2 * $n3 * $n4 * $n5;
    if ($valor > $mayor) {
        $mayor = $valor;
    }
}

echo $mayor;


// EJERCICIO 9

$limite = 1000;
for ($a = 1; $a <= $limite/3; $a++){
    for ($b = $a + 1; $b <= $limite/2; $b++){
        $c = $limite - $a - $b;
        if ( pow($a,2) + pow($b,2) == pow($c,2) )
            echo $a . " < " . $b . " < " . $c;
    }
}


// EJERCICIO 10

$limite = 1000;
$sum = 0;
for ($i = 2; $i < $limite; $i++) {
        if (esPrimo($i) == 1) {
                $sum = $sum + $i;
        }
}

echo $sum;

function esPrimo($num) {
    if ($num <= 1) {
        return false;
    }
    if($num == 2){
        return true;
    }
    if ($num % 2 == 0) {
        return false;
    }
 
    $x = 3;
    while (($x * $x) <= $num) {
        if ($num % $x == 0) {
            return false;
        } else {
            $x +=2;
        }
    }
 
    return true;
}
