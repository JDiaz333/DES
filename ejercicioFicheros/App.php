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
        $file = fopen("fichero.txt", "a");
        
        if($file && isset())
    }

    public function delete(){
        if(isset($_POST['listaDeseos'])){
            $numDeseo = (int)$_POST['listaDeseos'];

            if($numDeseo>0){

                if (isset($_COOKIE['listaDeseos'])){
                    $lista = unserialize($_COOKIE['listaDeseos']);
                    unset($lista[$numDeseo - 1]);
                }

                //$lista = array_values($lista); Ahorra todo lo siguiente:
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
        $file = fopen("fichero.txt", "w");
        fwrite($file);
        fclose($file);
    }

    public function webScraping(){
        $file = fopen("fichero.txt", "w");
        $web = fopen("https://santiagohernandez.aeducar.es/", "r");

        if($web && $file){
            //$content = fread($web, filesize(???));
            //fwrite($file, $content);

            while(!feof($web)){
                $content = fread($web,)
            }
        }
    }

    public function logout()
    {
        setcookie("name", "", time()-1);
        setcookie("password", "", time()-1);
        header('Location: ?method=login');
    }

    public function cambio(){
        if(isset($_GET['color'])){

            $color = (string)$_GET['color'];
        }
    } 
}
