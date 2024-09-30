<?php
include "matematicas.php";
$a = 1;
$b = 5;
$c = 6;

$calculaEcuacion = ecuacionGrado2($a,$b,$c);

if(is_nan($calculaEcuacion[0])&&is_nan($calculaEcuacion[1])){
    echo "FALSE";
}else{
    echo "Resultado 1: $calculaEcuacion[0]<br>
    Resultado 2: $calculaEcuacion[1]";
}