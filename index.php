<?php

// Selfwork PHP 1

// Dichiarazione delle variabili
$integer = 10;
$float = 35.48;
$string = "Silvia";
$boolean = true;

// Visualizza il tipo di dato e il valore delle variabili
var_dump($integer);
var_dump($float);
var_dump($string);
var_dump($boolean);

// Trasformazione delle variabili in costanti
define('CONST_INTEGER', $integer);
define('CONST_FLOAT', $float);
define('CONST_STRING', $string);
define('CONST_BOOLEAN', $boolean);

// Visualizza il tipo di dato e il valore delle costanti
var_dump(CONST_INTEGER);
var_dump(CONST_FLOAT);
var_dump(CONST_STRING);
var_dump(CONST_BOOLEAN);





