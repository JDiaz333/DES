<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Mercadesastre</title>
        <style>
            body{
                margin: 0;
            }

            div{
                text-align: right;
                background-color: lightslategray;
            }

            h1,header{
                text-align: center;
            }

            a{
                text-decoration: none;
                color: black;
                margin-right: 10px;
            }

            table{
                width: 100%;
                border: 1px solid;  
                border-collapse: collapse; 
            }

            td{
                border: 1px solid;
                border-collapse: collapse; 
            }

        </style>
    </head>
    <body>
        <div>
            <a href="/ejerciciosPHP/Trabajo/main.php?method=logout">Cerrar sesión</a>
            <h1>MERCADESASTRE</h1>
            <header>
                <a href="/ejerciciosPHP/Trabajo/main.php?method=registrarProducto">Registrar Producto</a>
                <a href="/ejerciciosPHP/Trabajo/main.php?method=buscarProducto">Buscar Producto</a>
                <a href="/ejerciciosPHP/Trabajo/main.php?method=valorTotal">Valor Total</a>
            </header>
            <br>
        </div>
        <h2>Inventario</h2>
        <table>
            <tr>
                <th>Producto</th> 
                <th>Stock</th>
                <th>Precio/Unidad</th>
                <th>Añadido por</th>
                <th>Acciones</th>
            </tr>
            <tr><td>4</td>
            <td>gdf</td>
            <td>454</td>
            <td>dfgdf</td>
            <td>fdsf/td></tr>
        </table>
        <button>Borrar toda la tabla</button>
    </body>
</html>