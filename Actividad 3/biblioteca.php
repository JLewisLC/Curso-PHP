<!DOCTYPE html>
<html>

<head>
    <title>funcion</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <!--
    Desarrollador: LEWIS
    Programa de formación: DESARROLLO WEB CON PHP (2441671)
    Evidencia: Uso de funciones
    -->
</head>

<body>
    <?php
    function operaciones($num1, $num2, $operador) //Se crea la función con las 3 variables
    {
        switch ($operador) { //Se crea un switch case en base a la variable 'operador' para realizar las operaciones
            case 'Suma': //Se verifica que valor es la variable 
                $total = $num1 + $num2;
                echo "$num1 + $num2 = $total"; //Se imprime los resultados
                break; //Se sale del switch case
            case 'Resta':
                $total = $num1 - $num2;
                echo "$num1 - $num2 = $total";
                break;
            case 'Multiplicación':
                $total = $num1 * $num2;
                echo "$num1 * $num2 = $total";
                break;
            case 'División':
                $total = $num1 / $num2;
                echo "$num1 / $num2 = $total";
                break;
            default:
                $total = $num1 + $num2;
                echo "$num1 + $num2 = $total" . "<br>" ."Operación suma por defecto";
                break;
        }
    }
    ?>
</body>

</html>