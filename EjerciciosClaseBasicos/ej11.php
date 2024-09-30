<?php

    $paises=["España" => ["Moneda" => "Euro", "Habitantes" => "47,78 millones"],
            "Inglaterra" => ["Moneda" => "Libra Esterlina", "Habitantes" => "55,98 millones"],
            "Portugal" => ["Moneda" => "Euro", "Habitantes" => "10,41 millones"],
            "Francia" => ["Moneda" => "Euro", "Habitantes" => "67,97 millones"]];

    foreach($paises as $pais => $dato){
        echo $pais."<br>";
        foreach($dato as $consulta => $result){
            echo $consulta." = ".$result."  ";
        }
        echo "<br>";
    }