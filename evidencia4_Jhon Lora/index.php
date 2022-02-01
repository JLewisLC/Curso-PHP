<!DOCTYPE html>
<html>

<head>
    <title>Venta de boletas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <!--
        Desarrollador: LEWIS
    Programa de formación: DESARROLLO WEB CON PHP (2441671)
    Evidencia: USO DE FORMULARIOS PARA TRANSFERENCIA
    -->
    <!-- soporte CDN para CSS y JavaScript de Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>

<body>
    <center>
        <h3><strong>Venta de boletas</strong></h3><!-- Se cambia el tamaño y se pone en negrita-->
        <?php
        //Se cargan los documentos que se van a usar
        include "sillas.php"; //Archivo de impresión 
        include "actualizado.php"; //Archivo de manejo de información

        //Se deber preguntar primero si se ha oprimido el boton enviar para saber que el programa apenas inicio
        //para así crear la tabla con todos los puesto vacios

        if (isset($_POST['boton1'])) {
            //Si el boton enviar fue oprimido se  extraen los datos del formulario
            $fila = $_POST["fila"]; //Valor de fila
            $puesto = $_POST["puesto"]; //Valor de lista
            $accion = $_POST["accion"]; //Valor de la accion a realizar
            $StringEscenario = $_POST["lista"]; //Valores actuales de la tabla en tipo lista
            $contador = 0; //Se usa para moverse a lo largo de la tabla
            //Se usan instrucciones for para recorrer la tabla
            for ($i = 0; $i < 5; $i++) {
                for ($j = 0; $j < 5; $j++) {
                    $contador = 5 * $i + $j;
                    $lista[$i][$j] = substr($StringEscenario, $contador, 1); //Se usa substr para obtener los valores de la lista
                }
                $contador = 0;
            }
            $lista = Accion($fila, $puesto, $accion, $lista); //Se actualiza el valor de la lista con la ayuda de la función acción
            mostrar($lista); //se actualiza la tabla con ayuda de la función mostrar
        } else if (isset($_POST["boton2"]) or !isset($_POST["boton1"])) { //Se pregunta si se oprimio el boton reset o si no se ha oprimido nunca el boton enviar
            //Se crea la lista con todos los puestos libres
            $lista = [["L", "L", "L", "L", "L"], ["L", "L", "L", "L", "L"], ["L", "L", "L", "L", "L"], ["L", "L", "L", "L", "L"], ["L", "L", "L", "L", "L"]];
            mostrar($lista);
        }

        ?>
        <!-- Se crea el formulario listas, botones y guardado de datos-->
        <form method="POST" action="index.php" class="form-inline">
            <!-- Se hace el guardado de datos de la tabla -->
            <input type="hidden" name="lista" value="<?php foreach ($lista as $fila) {
                                                            foreach ($fila as $puesto) {
                                                                echo $puesto;
                                                            }
                                                        } ?>" />

            <br>
            <label for="fila">Fila</label>
            <select class="form-control" name="fila">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>

            <label for="puesto">Puesto</label>
            <select class="form-control" name="puesto">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>

            <label for="accion">Acción</label>
            <select class="form-control" name="accion">
                <option value="L">Liberar</option>
                <option value="R">Reservar</option>
                <option value="V">Comprar</option>
            </select>
            </br>

            <br>
            <input type="submit" value="Enviar" class="btn btn-success" name="boton1">
            <input type="submit" value="Limpiar" class="btn btn-danger" name="boton2">
            </br>
        </form>

    </center>

</body>

</html>