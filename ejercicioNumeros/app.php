<?php

class App
{
    public $lista = [];


    public function index()
    {
        include("views/index.php");
    }

    public function fibonacci()
    {
        include("views/fibonacci.php");
    }

    public function potencia(){
        include("views/potencia.php");
    }

    public function factorial(){
        include("views/factorial.php");
    }

    public function primos(){
        include("views/primos.php");
    }

    public function run()
    {
        if(isset($_GET["method"])){
            $method = $_GET["method"];
        }else{
            $method = "index";
        }
        $this->$method();
    }

    public function calcularFibonacci()
    {
        $num = 0;
        $num2 = 1;
        $suma = 0;
        $this->lista[] = $num; $this->lista[] = $num2;

        while($suma < 1000000){
            $suma = $num + $num2;
            if($suma < 1000000){
                $this->lista[] = $suma;
            }
            $num = $num2;
            $num2 = $suma;
        }

        foreach($this->lista as $elemento){
                echo "$elemento<br>";
            }
    }
}