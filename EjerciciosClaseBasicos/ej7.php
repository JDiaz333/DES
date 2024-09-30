<?php

    $num = 169;
    $cont = 0;

    echo "Divisores de $num"."<br>";

    for($i = 1; $i <= $num; $i++){
        if($num % $i == 0){
            echo $i."<br>";
            $cont++;
        }
    }
    if($cont = 0){
        echo "El número $num es primo.";
    }