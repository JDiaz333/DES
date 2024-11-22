<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Mercadesastre</title>
        <style>
            body{
                margin: 0;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }

            #cabecera{
                text-align: right;
                background-color: black;
            }

            h1,header{
                text-align: center;
                color: red;
            }

            #cuerpo{
                margin: 10px;
            }

            h2{
                margin-bottom: 5px;
            }

            a{
                text-decoration: none;
                margin-right: 10px;
                color: green;
                font-weight: bold;
            }

            .button{
                padding: 1px 6px;
                text-decoration: none;
                background-color: coral;
                font-weight: bold;
                color: white;
                border: none;
            }

            table{
                width: 100%;
                border: 1px solid;  
                border-collapse: collapse;
                margin-bottom: 10px;
            }
            
            th{
                text-align: left;
            }

            /* Con esto conseguimos que el color de las filas de la tabla alterne
            entre el color seleccionado y el del fondo de la página */
            tr:nth-child(even) {
            background-color: lightgray;
            }

            td{
                border: 1px solid;
                border-left: none;
                border-right: none;
                height: 40px;
            }

        </style>
    </head>
    <body>
        <div id="cabecera">
            <a>Correo: <?php echo $_COOKIE['usuario'];?> |</a>
            <a href="/ejerciciosPHP/Trabajo/main.php?method=logout">Cerrar sesión</a>
            <h1>MERCADESASTRE</h1>
            <header>
                <a href="/ejerciciosPHP/Trabajo/main.php?method=registrarProducto">Registrar Producto</a>
                <a href="/ejerciciosPHP/Trabajo/main.php?method=buscarProducto">Buscar Producto</a>
                <a href="/ejerciciosPHP/Trabajo/main.php?method=valorTotal">Valor Total</a>
            </header>
            <br>
        </div>
        <div id="cuerpo">
            <h2>Inventario</h2>
            <table>
                <thead>
                    <tr>
                        <th>Producto</th> 
                        <th>Stock</th>
                        <th>Precio/Unidad</th>
                        <th>Añadido por</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $lista = unserialize($_COOKIE['listaProductos']);
                foreach ($lista as $index => $producto): 
                ?>
                <tr>
                    <td><?php echo $producto['nombre']; ?></td>
                    <td><?php echo $producto['stock']; ?></td>
                    <td><?php echo '$' . $producto['precio']; ?></td>
                    <td><?php echo $producto['usuario'] ?></td>
                    <td>
                        <?php echo '<a class="button" href="/ejerciciosPHP/Trabajo/main.php?method=delete&index={$index}">Eliminar</a>';?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a class="button" href="/ejerciciosPHP/Trabajo/main.php?method=empty">Borrar toda la tabla</a>
        </div>
    </body>
</html>