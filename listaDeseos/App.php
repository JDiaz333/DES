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

    public function auth()
    {
        if (isset($_POST['name']) && isset($_POST['password'])) {
            if($_POST['name'] != "" && $_POST['password'] != ""){
                setcookie("name", $_POST['name'], time()+3600*24);
                setcookie("password", $_POST['password'], time()+3600*24);
                header('Location: ?method=home');
            }else{
                header('Location: ?method=login');
            }
            
        }
      
    }
    
    public function new(){
        if (isset($_POST['deseo'])){
            if ($_POST['deseo'] != ""){
                if (isset($_COOKIE['listaDeseos'])){
                    $lista = unserialize($_COOKIE['listaDeseos']);
                }
            }
        }     
    }

    public function delete(){
        if(isset($_POST['listaDeseos'])){
            $numDeseo = (int)$_POST['listaDeseos'];
            
            if($numDeseo>0){

                if (isset($_COOKIE['listaDeseos'])){
                    $lista = unserialize($_COOKIE['listaDeseos']);
                    unset($lista[$numDeseo - 1]);
                }

                //$lista = array_values($lista);
                foreach($lista as $clave=>$valor){
                    if($numDeseo - 1 == $clave){
                        $lista[$numDeseo - 1] = 0;
                    }
                }
                $lista2 = [];
                foreach($lista as $clave=>$valor){
                    if($valor != 0){
                        $lista2[] = $lista[$clave];
                    }
                }
            }
        }
        
    }

    public function empty(){

    }

    public function logout()
    {
        setcookie("name", "", time()-1);
        setcookie("password", "", time()-1);
        header('Location: ?method=login');
    }
}
