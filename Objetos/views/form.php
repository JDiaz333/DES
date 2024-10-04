<html>
    <head>
        <title>Título</title>
    </head>
    <body>
        <?php
        require ("views/header.php");
        ?>
        <h1>Login de <?= $this->name ?></h1>

        <form action="">
            <label for="">nombre</label>
            <input type="text" name="name"><br>
            <label for="">contraseña</label>
            <input type="text" name="contraseña"><br>
        </form>
    </body>
</html>
