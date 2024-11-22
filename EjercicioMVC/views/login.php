<html>
<head>
    <title>Login</title>

</head>
<body>
    <h1>LOGIN</h1>
    <div id="cuerpo">       
        <form action="?method=auth" method = "post">
            <label for="">Usuario</label>
            <input type="text" name="user"> <br>

            <label for="">Contraseña</label>
            <input type="password" name="password"> <br>

            <button type="submit" class="button">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>