<html>
    <head>
        <title>Formulario 6</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="elemento">Elemento</label><br>
            <input type="text" name="nuevo_elemento" required><br>

            <input type="submit" value="Añadir"><br>
        </form>
        <?php
        if(isset($_POST['nuevo_elemento']) && !empty($_POST['nuevo_elemento'])){
            $nuevoElemento = $_POST['nuevo_elemento'];
            $lista[] = $nuevoElemento;
        }else{
            echo "Añade algún elemento";
        }
        ?>
        <ul>
            <?php foreach($lista as $elemento){
                echo "<li>$elemento</li>";
            }
            ?>
        </ul>
        </form>
    </body>
</html>