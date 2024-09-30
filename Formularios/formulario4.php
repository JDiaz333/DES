<html>
    <head>
        <title>Calculadora</title>
    </head>
    <body>
        <form action="" method="get">
            <label for="operando1">Operando:</label><br>
            <input type="text" name="operando1" value=""><br>

            <label for="operando2">Operando:</label><br>
            <input type="text" name="operando2" value=""><br>

            <label for="operacion">Operacion:</label><br>
            <select name="operacion">
                <option value="+">Suma</option>
                <option value="-">Resta</option>
                <option value="*">Multiplicación</option>
                <option value="/">División</option>
            </select>

            <input type="submit" value="Enviar"><br>

        </form>
        <p>
            <?php
            if(isset($_GET['operando1']) && isset($_GET['operando2'])){

                if($_GET['operando1'] != "" && $_GET['operando2'] != ""){
                    switch($_GET['operacion']){
                        case "+":
                            echo $_GET['operando1'] + $_GET['operando2'];
                            break;
                        case "-":
                            echo $_GET['operando1'] - $_GET['operando2'];
                            break;
                        case "*":
                            echo $_GET['operando1'] * $_GET['operando2'];
                            break;
                        case "/":
                            echo $_GET['operando1'] / $_GET['operando2'];
                            break;
                        default:
                            echo "Default";
                    }
                }else{
                    echo "Faltan operandos";
                }
            }
            ?>
        </p>
    </body>
</html>