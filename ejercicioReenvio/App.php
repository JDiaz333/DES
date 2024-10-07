<?php

class App{

    public function run()
    {
        if(isset($_GET["method"])){
            $method = $_GET["method"];
        }else{
            $method = "login";
        }
        $this->$method();
    }

    public function home()
    {
        include("views/home.php");
    }

    public function login()
    {
        include("views/login.php");
    }

    public function auth()
    {
        if(isset($_POST["usuario"]) && isset($_POST["contraseña"])){
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];

            setcookie("usuario",$usuario,time()+3600*24);
            setcookie("contaseña",$contraseña,time()+3600*24);

            header("Location: ?method=home");
        }
    }

    public function logout()
    {
        setcookie("usuario","",time()-1);
        setcookie("contaseña","",time()-1);

        header("Location: ?method=login");
    }

}