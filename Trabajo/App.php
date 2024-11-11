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
                if (filter_var($_POST['user'], FILTER_VALIDATE_EMAIL)) {  
                    $uValido = true;                
                }else{
                    setcookie('errorUsuario','Introduzca un correo electrónico válido',time() +1 );
                }

                if (strlen($_POST['password'] ) >= 8) {
                    $pValido = true; 
                }else{
                    setcookie('errorContraseña','La contraseña debe tener al menos 8 caracteres',time() +1 );
                }
                
                if($uValido && $pValido){
                    setcookie('usuario', $_POST['user'], time() + 3600*24);
                    $this->enviarCorreo($_COOKIE['usuario']);
                    header('Location: ?method=home');
                    
                }else{
                    header('Location: ?method=login');
                }
            }else{
                header('Location: ?method=login');
            }           
        }
    }

    public function logout()
    {
        setcookie("user", "", time()-1);
        setcookie("password", "", time()-1);
        header('Location: ?method=login');
    }
    
    public function new(){
        if (isset($_POST['producto'])){
            if ($_POST['producto'] != ""){
                if (isset($_COOKIE['listaProductos'])){
                    $lista = unserialize($_COOKIE['listaProductos']);
                    $producto = [
                        "nombre"=> $_POST['producto'],
                        "stock"=> $_POST['stock'],
                        "precio"=> $_POST['precio'],
                        "usuario"=> $_COOKIE['usuario']                      
                    ];
                    $lista[] = $producto;
                    setcookie("listaProductos",serialize($lista),time()+3600*24);
                }else{
                    $producto = [
                        "nombre"=> $_POST['producto'],
                        "stock"=> $_POST['stock'],
                        "precio"=> $_POST['precio'],
                        "usuario"=> $_COOKIE['usuario']                      
                    ];
                    $lista[] = $producto;
                    setcookie("listaProductos",serialize($lista),time()+3600*24);
                }
            }
        }
        header('Location: ?method=registrarProducto');   
    }

    public function delete(){
        if(isset($_COOKIE['listaProductos'])){
            $numProducto = (int)$_COOKIE['listaProductos'];

            if($numProducto>0){

                if (isset($_COOKIE['listaProductos'])){
                    $lista = unserialize($_COOKIE['listaProductos']);
                    unset($lista[$numProducto - 1]);
                }

                $lista = array_values($lista);
            }
        }
        header('Location: ?method=home');   
    }

    public function enviarCorreo($email) {
        $asunto = "Inicio de sesión exitoso";
        $mensaje = "Usted ha iniciado sesión correctamente en Mercadesastre.";
        $mailEmpresa = "From: no-reply@mercadesastre.com";
    
        mail($email, $asunto, $mensaje, $mailEmpresa);
    }

    public function empty(){
        if (isset($_COOKIE['listaProductos'])){
            setcookie("listaProductos","",-1);
        }
        header('Location: ?method=home');
    }

    public function buscar(){
        if(isset($_POST['nombre'])){
            if(isset($_COOKIE['listaProductos'])){
                $nombre = $_POST['nombre'];
                $lista = unserialize($_COOKIE['listaProductos']);
                foreach($lista as $producto){
                    if($producto['nombre'] == $nombre){
                        setcookie("prod",serialize($producto),time()+1);
                    }
                }
                if(!isset($_COOKIE['prod'])){
                    setcookie("prodE"," ",time()+1);
                }
            }
        }
        header('Location: ?method=buscarProducto');
    }

    public function calcularValor(){
        $this->buscar();
        if(isset($_COOKIE['prod'])){
            $prod = unserialize($_COOKIE['prod']);
            $nombre = $prod['nombre'];
            $valor = $prod['stock']*$prod['precio'];
            setcookie("valor","El valor total de $nombre es: $valor",time()+1);
        }       
        header('Location: ?method=valorTotal'); 
    }
}
