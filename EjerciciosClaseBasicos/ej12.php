<?php
function ecuacionGrado2($a,$b,$c){
    $result1 = (-$b + sqrt($b*$b - 4*$a*$c)) / (2*$a); // +
    $result2 = (-$b - sqrt($b*$b - 4*$a*$c)) / (2*$a); // -

    $resultados=[$result1,$result2];

    return $resultados;
}

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