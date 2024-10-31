<?php

require "configDB.php";

class App
{
    
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
        }
        $this->$method();
    }

    public function home()
    {
        include("views/home.php");
    }

    public function consultaEscritores(){
        try{
            $bd = new PDO(cadena_conexion,usuario,clave);
            echo "Conexión establecida con éxito <br>";
        
            $sql = 'SELECT * FROM escritor
                    ORDER BY nombre ASC';
            $resultado = $bd->query($sql);
        
        }catch(PDOException){
            echo "Problema en la conexión";
        }finally{
            include("views/home.php");
        } 
    }

    public function consultaLibroEscritor(){
        try{
            $bd = new PDO(cadena_conexion,usuario,clave);
            echo "Conexión establecida con éxito <br>";
        
            $sql = 'SELECT * FROM libro
                    WHERE codigo_escritor = ? 
                    ORDER BY precio DESC';
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
    }

    public function consultaTienda(){
        try{
            $bd = new PDO(cadena_conexion,usuario,clave);
            echo "Conexión establecida con éxito <br>";
        
            $sql = 'SELECT * FROM tienda
                    WHERE codigo = ?';
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
    }

    public function consultaLibroTienda(){
        try{
            $bd = new PDO(cadena_conexion,usuario,clave);
            echo "Conexión establecida con éxito <br>";
        
            $sql = 'SELECT * FROM disponibilidad
                    WHERE codigo_libro = ? 
                    ORDER BY precio DESC';
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
    }
}
