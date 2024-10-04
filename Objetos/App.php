<?php

class App{
    public $name;
    private $apellido;
    public $student;
    public $module;
    public $teacher;

    public function __construct($name = "Aplicación PHP")
    {
        echo "Construyendo la app <hr>";
        $this->name = $name;
        $this->module = "Desarrollo Web en Entorno Servidor";
        $this->teacher = "Israel Gimeno";
        $this->student = "Jorge Díaz";
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    
    public function run()
    {
        echo "Moneda al aire... <hr>";
        $moneda = rand(0,1);
        if($moneda){
            echo "<h3>Ha salido cara: </h3> <br>";
            $this->index();
        }else{
            echo "<h3>Ha salido crz: </h3> <br>";
            $this->login();
        }
    }

    public function run2()
    {
        if(isset($_GET["method"])){
            $method = $_GET["method"];
        }else{
            $method = "index";
        }
        $this->$method();
    }

    public function index()
    {
        include("views/index.php");
        /*echo "Estos es $this->name<br>";
        echo "Me llamo $this->student<br>";
        echo "Estamos estudiando $this->module con el profesor $this->teacher<br>";*/
    }

    public function login()
    {
        include("views/form.php");
    }

    public function __toString()
    {
        echo "Hola";
    }
}