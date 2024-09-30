<?php

function esPalindromo($cadena){
    $cadena = strtolower($cadena);
    $cadenaReves = strrev($cadena);
    if($cadena == $cadenaReves){
        return true;
    }else{
        return false;
    }
}

$palabra = "AbBa";

if(esPalindromo($palabra)){
    echo "Es palíndromo";
}else{
    echo "No es palíndromo";
}