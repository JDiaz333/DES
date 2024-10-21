<?php

class App
{

    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'login';
        }
        $this->$method();
    }

    public function login()
    {
        include("views/login.php");
    }

    public function home()
    {
        include("views/home.php");
    }

    public function buscarProducto(){
        include("views/buscarProducto.php");
    }

    public function registrarProducto(){
        include("views/registrarProducto.php");
    }

    public function valorTotal(){
        include("views/valorTotal.php");
    }

    public function auth()
    {
        if (isset($_POST['user']) && isset($_POST['password'])) {
            if($_POST['user'] != "" && $_POST['password'] != ""){
                setcookie("user", $_POST['user'], time()+3600*24);
                setcookie("password", $_POST['password'], time()+3600*24);
                header('Location: ?method=home');
            }else{
                header('Location: ?method=login');
            }           
        }
    }

    public function logout()
    {
        setcookie("name", "", time()-1);
        setcookie("password", "", time()-1);
        header('Location: ?method=login');
    }
    
    public function new(){
        if (isset($_POST['producto'])){
            if ($_POST['producto'] != ""){
                if (isset($_COOKIE['listaProductos'])){
                    $lista = unserialize($_COOKIE['listaProductos']);
                }
            }
        }     
    }

    public function delete(){
        if(isset($_POST['listaProductos'])){
            $numProducto = (int)$_POST['listaProductos'];

            if($numProducto>0){

                if (isset($_COOKIE['listaProductos'])){
                    $lista = unserialize($_COOKIE['listaProductos']);
                    unset($lista[$numProducto - 1]);
                }

                $lista = array_values($lista);
                /*foreach($lista as $clave=>$valor){
                    if($numProducto - 1 == $clave){
                        $lista[$numProducto - 1] = 0;
                    }
                }
                $lista2 = [];
                foreach($lista as $clave=>$valor){
                    if($valor != 0){
                        $lista2[] = $lista[$clave];
                    }
                }*/
            }
        }   
    }

    public function empty(){
        if (isset($_COOKIE['listaProductos'])){
            setcookie("listaProductos","",-1);
        }
    }
}
