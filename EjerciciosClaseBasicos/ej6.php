<?php

    $num = 0;
    $num2 = 1;

    for($i = 1; $i <= 10; $i++){
        $suma = $num + $num2;
        echo $suma."<br>";
        $num = $num2;
        $num2 = $suma;
    }