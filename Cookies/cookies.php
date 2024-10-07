<html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
        <?php
        if(isset($_GET["reset"])){
            setcookie("visitas",0,time()-1);
            echo "Página visitada por primera vez";
        }else if(!isset($_COOKIE["visitas"])){
            //El usuario ha entrado por primera vez a la página
            setcookie("visitas","1",time()+3600*24);
            echo "Página visitada por primera vez";
        
        }else{
            //El usuario ha entrado varias veces a la página
            $visitas = (int)$_COOKIE["visitas"];
            $visitas++;
            setcookie("visitas",$visitas,time()+3600*24);
            echo "Página visitada " . $visitas . " veces";
        
        }
        ?>
        <a href="?reset=true">Reiniciar</a>
    </body>
</html>