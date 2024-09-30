<?php
function ecuacionGrado2($a,$b,$c){
    $result1 = (-$b + sqrt($b*$b - 4*$a*$c)) / (2*$a); // +
    $result2 = (-$b - sqrt($b*$b - 4*$a*$c)) / (2*$a); // -

    $resultados=[$result1,$result2];

    return $resultados;
}