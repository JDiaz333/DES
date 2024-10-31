<?php

$cadena_conexion = 'mysql:dbname=Escuela; host=localhost';
$usuario = 'root';
$clave='';
$bd=null;

try{
    $bd = new PDO($cadena_conexion,$usuario,$clave);
    echo "Conexión establecida con éxito <br>";

    $sql = 'SELECT * FROM alumno';
    $resultado = $bd->query($sql);

    foreach ($resultado as $alumno){
        echo $alumno['codigo']."\t";
        echo $alumno['nombre']."\t";
        echo $alumno['codigo_curso']."<br>";
    }
}catch(PDOException $e){
    echo "Problema en la conexión";
}finally{
    $bd=null;
}

?>