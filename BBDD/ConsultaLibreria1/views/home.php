<html>
    <head>
        <title>Libreria</title>
        <style>
            a{
                text-decoration: none;
            }

            .column{
                float:left;
                width: 50%;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="column">
                <h1>Libreria</h1>
                <h2>Elija la consulta a realizar:</h2>
                <ol>
                    <li>
                        <a href="/ejerciciosPHP/BBDD/ConsultaLibreria1/main.php?method=consultaEscritores">
                        Consultar todos los escritores en orden ascendente.</a>
                    </li>
                    <li>
                        <a href="/ejerciciosPHP/BBDD/ConsultaLibreria1/main.php?method=consultaLibroEscritor">
                        Consultar los libros de un escritor de la base de datos,en orden por precio descendente.</a>
                    </li>
                    <li>
                        <a href="/ejerciciosPHP/BBDD/ConsultaLibreria1/main.php?method=consultaTienda">
                        Consultar una tienda de la base de datos.</a>
                    </li>
                    <li>
                        <a href="/ejerciciosPHP/BBDD/ConsultaLibreria1/main.php?method=consultaLibroTienda">
                        Consultar la disponibilidad de un libro en una tienda de la base de datos.</a>
                    </li>
                </ol>
            </div>
        </div>
    </body>
</html>