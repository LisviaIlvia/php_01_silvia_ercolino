<?php

$integer = 10;
$float = 35.48;
$string = "Silvia";
$boolean = true;

var_dump($integer);
var_dump($float);
var_dump($string);
var_dump($boolean);

define('CONST_INTEGER', $integer);
define('CONST_FLOAT', $float);
define('CONST_STRING', $string);
define('CONST_BOOLEAN', $boolean);

var_dump(CONST_INTEGER);
var_dump(CONST_FLOAT);
var_dump(CONST_STRING);
var_dump(CONST_BOOLEAN);





