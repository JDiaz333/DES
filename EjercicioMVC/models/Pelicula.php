<?php

require_once("models/Model.php");

class Pelicula extends Model{

    //Atributos privados
    private $pelicula;
    private $año;
    private $duracion;
    private $director;

    public static function consultarTodos(){
        
        $todosEscritores = null;

        try {
            $conexion = Escritor::db();


            $sql1 = "SELECT * FROM escritor ORDER BY nombre ASC";

            $resultado = $conexion->query($sql1);    
            

            $todosEscritores = $resultado->fetchAll(PDO::FETCH_CLASS, Escritor::class);



        } catch (PDOException) {
            echo "Problema en la conexión";
        } finally{
           
            return $todosEscritores;
        }

    }

    public static function paginate($page = 1, $size = 10)
    {
        //obtener conexión
        $db = Model::db();
        //preparar consulta
        $sql = "SELECT count(id) FROM Pelicula";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $n = (int) $statement->fetch()[0]; //registros
        $n = ceil($n / $size); //pages

        $offset = ($page - 1) * $size;
        $sql1 = "SELECT * FROM Coche LIMIT $offset, $size";
        $sql2 = "SELECT * FROM Coche WHERE id > $offset LIMIT $size";
        $sql3 = "SELECT * FROM Coche";
        //ejecutar
        $antes = microtime();
        $statement = $db->query($sql);
        $despues = microtime();
        echo $despues - $antes;
        //recoger datos con fetch_all
        $coches = $statement->fetchAll(PDO::FETCH_CLASS, Pelicula::class);
        //retornar
        $pages = new stdClass;

        $pages->coches = $coches;
        $pages->n = $n;
        return $pages;
    }

    
    //TODO consultar id, insertar, actualizar

    /**
     * Get the value of pelicula
     */ 
    public function getPelicula()
    {
        return $this->pelicula;
    }

    /**
     * Set the value of pelicula
     *
     * @return  self
     */ 
    public function setPelicula($pelicula)
    {
        $this->pelicula = $pelicula;

        return $this;
    }

    /**
     * Get the value of año
     */ 
    public function getAño()
    {
        return $this->año;
    }

    /**
     * Set the value of año
     *
     * @return  self
     */ 
    public function setAño($año)
    {
        $this->año = $año;

        return $this;
    }

    /**
     * Get the value of duracion
     */ 
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set the value of duracion
     *
     * @return  self
     */ 
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get the value of director
     */ 
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set the value of director
     *
     * @return  self
     */ 
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }
}

?>