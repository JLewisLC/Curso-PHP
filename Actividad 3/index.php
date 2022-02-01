<!DOCTYPE html>
<html>

<head>
    <title>Operaciones aritmeticas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <!--
      Desarrollador: LEWIS
    Programa de formación: DESARROLLO WEB CON PHP (2441671)
    Evidencia: Uso de funciones
    -->
    <!-- soporte CDN para CSS y JavaScript de Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>

<body>
    <h3><strong> Operaciones aritméticas</strong></h3><!-- Se cambia el tamaño y se pone en negrita-->
    <!-- Se crea el formulario-->
    <form method="POST" action="index.php" class="form-inline">
        <!-- Se crea los cuadros de texto para ingresar los numeros-->
        <br>
        <label for="num1">Numero 1</label>
        <input type="text" name="num1" class="form-control" id="num1">
        <label for="num2">Numero 2</label>
        <input type="text" name="num2" class="form-control" id="num2">
        </br>

        <!-- Se crea la lista para seleccionar la operación a realizar-->
        <br>
        <label for="operador">Operación</label>
        <select class="form-control" name="operador">
            <option></option>
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicación</option>
            <option>División</option>
        </select>
        </br>

        <!-- Se crea el botón para enviar los datos-->
        <br>
        <input type="submit" value="Realizar operación" class="btn btn-success" name="boton1">
        </br>
    </form>

    <h4> <br> <strong>
            <?php
            if (isset($_POST['boton1'])) { //Se pregunta si el botón fue oprimido
                //Se obtienen y guardan los datos del formulario en variables
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operador = $_POST['operador'];
                //Se pregunta si los datos ingresados son numericos para realizar la operación
                if (is_numeric($num1) and is_numeric($num2)) {
                    include "biblioteca.php"; //Se importa el archivo que contiene la función 
                    echo "El resultado es: ";
                    operaciones($num1, $num2, $operador); //Se llama la función operaciones para imprimr los valores
                } else { //Si los valores no son numericos se envia un mensaje para informarlo
                    echo "Ingrese valores validos por favor";
                }
            }
            ?>
    </h4> </br></strong>

</body>

</html>