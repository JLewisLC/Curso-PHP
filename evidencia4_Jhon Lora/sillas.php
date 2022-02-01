<!DOCTYPE html>
<html>

<head>
    <title>Mostrar sillas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <!--
     Desarrollador: LEWIS
    Programa de formación: DESARROLLO WEB CON PHP (2441671)
    Evidencia: USO DE FORMULARIOS PARA TRANSFERENCIA
    -->
</head>

<body>

    <?php
    //Esta funcion es la encargada de la impresión de los datos
    function mostrar($lista)
    { //Se crea la tabla
        echo "<table border='1' width=200 style=text-align:center> 
        <thead>
        <tr>
        <th style=text-align:center>#</th>
        <th style=text-align:center>1</th>
        <th style=text-align:center>2</th>
        <th style=text-align:center>3</th>
        <th style=text-align:center>4</th>
        <th style=text-align:center>5</th>
        </tr>
        </thead>
        <tbody>";
        
        $i = 1; //Se usa para el numero de la columnas de la tabla
        foreach ($lista as $fila) { //Se usan 2 foreach para llenar la tabla por un lado encabezados y por el otro los datos
            echo "<tr>";
            echo "<th style=text-align:center>";
            echo $i;
            echo "</th>";
            foreach ($fila as $silla) {
            echo "<td>";
            echo "$silla";
            echo "</td>";
            }
            echo "</tr>";
            $i++;
        }
        echo "</table>";
    }
    ?>

</body>

</html>