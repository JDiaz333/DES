<html>
    <head>
        <title>Formulario1</title>
    </head>
    <body>
        <form action="" method="get">
            <label for="titulo">Título:</label><br>
            <input type="text" name="titulo" value="Introduzca título"><br>

            <label for="autor">Autor:</label><br>
            <input type="text" name="autor" value=""><br>

            <label for="editorial">Editorial:</label><br>
            <input type="text" name="editorial" value=""><br>

            <label for="paginas">Páginas:</label><br>
            <input type="text" name="paginas" value=""><br>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

<?php
echo $_GET['titulo'];