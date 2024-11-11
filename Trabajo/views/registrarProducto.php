<html>
    <head>
        <title>Registrar Producto</title>
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
        <h1 id="cabecera">REGISTRAR PRODUCTO</h1>   
        <div id="cuerpo">
            <form action="?method=new" method = "post">

            <label for="">Producto</label>
            <input type="text" name="producto" required> <br>

            <label for="">Stock</label>
            <input type="number" name="stock" required> <br>

            <label for="">Precio/Unidad</label>
            <input type="number" step= 0.01 name="precio" required> <br>

            <button type="submit" class="button">Registrar producto</button>
            <a href="/ejerciciosPHP/Trabajo/main.php?method=home">Volver al inventario</a>
            </form>
        </div>  
    </body>
</html>