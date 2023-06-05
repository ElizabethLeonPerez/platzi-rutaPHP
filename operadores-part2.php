<?php 


/*
$resultado = 5 ** 3;
echo $resultado
*/ 

# Relacionales: No compara tipos

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == Igual 

//var_dump( $a == $b);
//var_dump( $a == $b2);

// === Identico: Este compara tipos

//var_dump( $a === $b);
//var_dump( $a === $b2);


// != Diferente: No compara tipos
/*
var_dump( $a != $b);
var_dump( $a != $b2);
*/
// !== Diferente identico: Compara tipos
/*
var_dump( $a !== $b);
var_dump( $a !== $b2);
*/

// < Menor que 
/*
var_dump( $a < $b);
var_dump( $c < $b);
var_dump( $d < $b);
*/

// > Mayor que
/*
var_dump( $a > $b);
var_dump( $c > $b);
var_dump( $d > $b);
*/

// >= Mayor o igual que
/*
var_dump( $a >= $b);
var_dump( $c >= $b);
var_dump( $d >= $b);
*/

// <= Menor o igual que
/*
var_dump( $a <= $b);
var_dump( $c <= $b);
var_dump( $d <= $b);
*/

// <=> Nave espacial
# Va a devolver -1 si es número que esta a la izq es menor que la derecha
# Si son iguales va a devolver 0
# Y si el de la izq es mayor al de la derecha va a dar 1

//echo 2 <=> 1; // 1
//echo 2 <=> 2; // 0
//echo 2 <=> 3; // -1


// ?? Función de null

$edad_de_pepito = 23;
echo $edad_de_juanito ?? $edad_de_pepito;




?>