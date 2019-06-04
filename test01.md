# Problemas a resolver

## Problema 1

Si listamos todos los números naturales por debajo de 10, que son múltiplos de 3 o 5, se obtiene 3, 5, 6 y 9. La suma de estos múltiplos es 23.

Encontrar la suma de todos los múltiplos de 3 o 5 por debajo de 1000.

#### Pseudo código

    Lista de valores iniciales
    Variable de numero limite
    Lista en blanco;

    por cada numero natural hasta el limite definido

        buscar por cada valor
            calcular el modulo
            si modulo es igual a cero
                agregar numero en lista en blanco
    
    imprimir la suma

### Código en PHP

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

___


## Problema 2

Cada nuevo término en la secuencia de Fibonacci se genera mediante la adición de los dos términos anteriores. Al comenzar con 1 y 2, los primeros 10 términos serán los siguientes:

1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

Al tener en cuenta los términos de la sucesión de Fibonacci cuyos valores no superan los cuatro millones, calcula la suma de los términos con valor par

#### Pseudo código

    Variable limite
    Lista vacia para almacenar valores
    Variable incremental

    hacer
        calcular fibonacci del numero
        
        si el numero es par
            insertar en lista

        incrementar variable en 1
    mientras valor fibonacci sea menor que limite

    imprimir la suma

#### Código PHP

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

___


## Problema 3

Los factores primos de 13195 son 5, 7, 13 y 29.

¿Cuál es el factor primo más grande del número 600851475143?

#### Pseudo código

    variable limite
    variable numero mayor

    por cada numero hasta el limite
        si es un numero primo y es modulo del valor
            asignar numero a mayor

    funcion para calular numero primo

#### Código PHP

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

___


## Problema 4

Un número palindrómico se lee lo mismos en ambos sentidos. El palíndromo más grande hecho de el producto de dos números de 2 dígitos es 9009 = 91 × 99.

Encuentra el palíndromo más grande hecho de el producto de dos números de 3 dígitos.

#### Pseudo código

    variable palindromo

    por cada numero desde 99 hasta 10
        por cada numero desde 99 hasta 10
            multiplicacion de valores

            validar si el valor es palindromo
                validar si el valor es mayor que el ultimo palindromo guardado

    imprimir valor maximo

#### Código PHP

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

___


## Problema 5

2520 es el número más pequeño que puede ser dividido por cada uno de los números de 1 a 10 sin ningún residuo.

¿Cuál es el número positivo más pequeño que es uniformemente divisible por todos los números de 1 a 20?

#### Pseudo código

    variable valor empieza en +1

    mientras exista multiplo
        sumar 1 a valor

    funcion para calcular multiplo
        recorrer valor y ver si es multiplo de numer entre 1 y 20

#### Código PHP

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

___


## Problema 6

La suma de los cuadrados de los diez primeros números naturales es,

1<sup>2</sup> + 2<sup>2</sup> + ... + 10<sup>2</sup> = 385

El cuadrado de la suma de los diez primeros números naturales es,

(1 + 2 + ... + 10)<sup>2</sup> = 55<sup>2</sup> = 3025

Por lo tanto la diferencia entre la suma de los cuadrados de los diez primeros números naturales y el cuadrado de la suma es 3025 - 385 = 2640.

Encuentre la diferencia entre la suma de los cuadrados de los primeros cien números naturales y el cuadrado de la suma.

#### Pseudo código

    variable limite a calcular

    variable valor inicial
    por cada numero hasta el limite
        sumar valor mas el cuadrado del valor

    variable valor inicial 2
    por cada numero hasta el limite
        sumar valores
    elevar valor inicial 2 al cuadrado

    resultado es igual a valor 2 menos valor
    imprimir resultado
    

#### Código PHP

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

___


## Problema 7

Al enumerar los seis primeros números primos: 2, 3, 5, 7, 11 y 13, podemos ver que el sexto primo es 13.

¿Cuál es el número primo 10001?

#### Pseudo código

    variable valor para iniciar el ciclo
    variable para el resultado
    variable limite

    mientras valor sea menor que el limite


#### Código PHP

    $valor = 1;
    $res = 1;
    $limite = 10001;
    
    while ($valor < $limite) {
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

___


## Problema 8

Encontrar el mejor producto de cinco dígitos consecutivos en el número 1000 dígitos.

73167176531330624919225119674426574742355349194934
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
8458015616609791913387549920052406368991256071760
05886116467109405077541002256983155200055935729725
71636269561882670428252483600823257530420752963450

#### Pseudo código

    crear una variable string con el numero buscado
    variable numero mayor encontrado
    variable valor de la multiplicacion

    ciclo para recorrer la matrix
        variable para obtener el digito en la primera posicion del ciclo
        variable para obtener el digito en la segunda posicion del ciclo
        variable para obtener el digito en la tercera posicion del ciclo
        variable para obtener el digito en la cuarta posicion del ciclo
        variable para obtener el digito en la quinta posicion del ciclo

        multiplicar los valores

        si el valor es mayor que el anterior
            asignar a mayor el valor

    imprimir el resultado

#### Código PHP

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

___


## Problema 9

Un triplete de Pitágoras es un conjunto de tres números naturales, a < b < c, para el que,

a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup>

Por ejemplo, 3<sup>2</sup> + 4<sup>2</sup> = 9 + 16 = 25 = 5<sup>2</sup>.

Existe exactamente un triplete de Pitágoras para los que a + b + c = 1,000.

Encuentre el producto abc.

#### Pseudo código

    variable limite
    ciclo para recorrer el limite dividido 3 para encontrar a
        ciclo para recorrer el limite dividido 2 para encontrar b
            c es igual al limite menos a y menos b
                si la suma de cuadrados de a y b es igual al cuadrado de c
                    imprimir respuesta

#### Código PHP

    $limite = 1000;
    for ($a = 1; $a <= $limite/3; $a++){
        for ($b = $a + 1; $b <= $limite/2; $b++){
            $c = $limite - $a - $b;
            if ( pow($a,2) + pow($b,2) == pow($c,2) )
                echo $a . " < " . $b . " < " . $c;
        }
    }

___


## Problema 10

La suma de los números primos por debajo de 10 es 2 + 3 + 5 + 7 = 17.

Halla la suma de todos los números primos por debajo de los dos millones.

#### Pseudo código

    definir el limite para el calculo
    variable para la suma

    ciclo para recorrer numeros ordinarios hasta el limite
        validar si el numero es primo
            sumar al resultado el valor
    
    imprimir resultado

#### Código PHP

    $limite = 2000000;
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