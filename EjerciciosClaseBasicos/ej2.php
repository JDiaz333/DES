<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php      
        $direccion = "C. Ejercicio , 2";
        $mail = "ejercicio@servidor.com";
        ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Mail</th>
            </tr>
            <tr>
                <td>
                    <?php
                        $nombre = "Jorge";
                       echo "$nombre"; 
                    ?>
                </td>
                <td>
                    <?php
                       echo "$direccion"; 
                    ?>
                </td>
                <td>
                    <?php
                       echo "$mail"; 
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>