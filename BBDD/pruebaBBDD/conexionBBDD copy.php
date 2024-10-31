<?php

$cadena_conexion = 'mysql:dbname=Escuela; host=localhost';
$usuario = 'root';
$clave='';
$bd=null;

try{
    $bd = new PDO($cadena_conexion,$usuario,$clave);
    echo "Conexión establecida con éxito <br>";

    $sql = 'SELECT * FROM alumno where codigo_curso IN (
            SELECT codigo FROM curso WHERE nombre = ?)';
    //$resultado = $bd->query($sql);

    $resultado = $conexion->prepare($sql);

    $resultado->execute(array('Lengua'));

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