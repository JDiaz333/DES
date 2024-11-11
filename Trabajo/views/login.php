<html>
<head>
    <title>Login</title>
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
    <h1>LOGIN</h1>
    <div id="cuerpo">
        <p style="color: red;">
        <?php
            if(isset($_COOKIE['errorUsuario']) && isset($_COOKIE['errorContraseña'])){
                echo $_COOKIE['errorUsuario'] . "<br>";
                echo $_COOKIE['errorContraseña'];
            }elseif(isset($_COOKIE['errorUsuario'])){
                echo $_COOKIE['errorUsuario'];
            }elseif(isset($_COOKIE['errorContraseña'])){
                echo $_COOKIE['errorContraseña'];
            }
        ?>
        </p>   
        
        <form action="?method=auth" method = "post">
            <label for="">Correo electrónico</label>
            <input type="text" name="user"> <br>

            <label for="">Contraseña</label>
            <input type="password" name="password"> <br>

            <button type="submit" class="button">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>