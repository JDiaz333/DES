<html>

<head>
    <title>Título</title>
</head>

<body style="background-color: <?php echo $color;?>">
    <div class="row">
        <div class="column">
            <ol>
                <?php
                //Listo los elementos por pantalla uno a uno

                if (isset($_COOKIE['listaDeseos'])){

                    $lista = unserialize($_COOKIE['listaDeseos']);

                    foreach($lista as $elemento){
                        echo "<li>$elemento</li>";
                    }
                }
                ?>
            </ol>
        </div>
    </div>

</body>

</html>