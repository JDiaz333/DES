<html>

<head>
    <title>Título</title>
</head>

<body style="background-color: <?php echo $color;?>">
    <div class="row">
        <div class="column">
            <form action="?method=webScraping">

            </form>
            <ol>
                <?php
                //Listo los elementos por pantalla uno a uno

                $file = fopen("fichero.txt", "r");
                if($file){
                    while(($line = fgets($file)) != false){
                        $lista[] = $line;
                    }

                    foreach ($lista as $elemento){
                        echo "<li>$elemento</li>";
                    }
                }
                fclose($file);
                ?>
            </ol>
        </div>
    </div>

</body>

</html>