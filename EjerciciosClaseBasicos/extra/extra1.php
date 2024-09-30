<?php

function registrarProducto($nom,$cat,$pre,$cant){
   $productos[] = ["Nombre" => $nom, "Categoría" => $cat, "Precio" => $pre, "Cantidad" => $cant];
   return $productos;
}

$inventario[] = registrarProducto("Piña","Fruta",60,10);
foreach($inventario as $tipo => $dato){
    echo $tipo." ".$dato."<br>";
}