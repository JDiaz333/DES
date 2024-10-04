<html>
    <head>
        <title>Fibonacci</title>
    </head>
    <body>
        <?php
        require ("header.php");
        ?>
        <h1>Fibonacci</h1>
        <p>Los números de la secuencia de Fibonacci por debajo de un millón son:</p>
        <?php
         $lista [] = $this->calcularFibonacci(); 
         foreach($lista as $elemento){
            echo "$elemento<br>";
        }  
        ?>
    </body>
</html>
