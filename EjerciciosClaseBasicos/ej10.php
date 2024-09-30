<?php
    $equipo = ["base" => "Juan", "escolta" => "Isra", "alero" => "Javier", "alapivot" => "Pau", "pivot" =>"Marc"];

    foreach($equipo as $posicion => $jugador){
        echo $posicion." ".$jugador."<br>";
    }