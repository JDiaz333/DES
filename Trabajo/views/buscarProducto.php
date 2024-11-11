<html>
    <head>
        <title>Buscar Producto</title>
        <style>
            body{
                margin: 0;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }

            a{
                text-decoration: none;
                margin-right: 10px;
                color: green;
                font-weight: bold;
            }

            h1{
                text-align: center;
                color: red;
                background-color: black;
            }
            
            .button{
                padding: 1px 6px;
                text-decoration: none;
                background-color: coral;
                font-weight: bold;
                color: white;
                border: none;
                font-size: 18px;
                margin-top: 10px;
            }

            #cuerpo{
                margin-left: 10px;
            }
        </style>
    </head>
    <body>
        <h1>BUSCAR PRODUCTO</h1>
        
        <div id="cuerpo">
            <form action="?method=buscar" method = "post">

            <label for="">Nombre del producto:</label>
            <input type="text" name="nombre" required> <br>

            <button type="submit" class="button">Buscar producto</button>
            <p><?php if(isset($_COOKIE['prod'])){
                $prod = unserialize($_COOKIE['prod']);
                echo "Nombre: " . $prod['nombre'] . "<br>";
                echo "Stock: " . $prod['stock'] . "<br>";
                echo "Precio/Unidad: " . $prod['precio'] . "<br>";
            }else if(isset($_COOKIE['prodE'])){
                echo "<p style=\"color:red\">Producto no encontrado<p> ";
            } ?>
            </p>
            </form>
            <a href="/ejerciciosPHP/Trabajo/main.php?method=home">Volver al inventario</a>
        </div>
        
    </body>
</html>