<!DOCTYPE html>
<html>

<head>
    <title>Listado de personas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>

<body>
    <h3>Listado de personas</h3>
    <?php
    /*
    Desarrollador: LEWIS
    Programa de formación: DESARROLLO WEB CON PHP (2441671)
    Evidencia: Uso de arreglos 
    */

    // Se realizo la creacción de los 2 arreglos necesarios para el ejercicio 
    $Datos = [
        ["Juan P&eacuterez", "Cra. 45# 45 - 56", "3456789", "23/12/1997", "Amarillo"],
        ["Pablo Manrique", "Calle. 23# 12 - 19 Sur", "3214567", "12/10/1980", "Verde"],
        ["Nancy Peña", "Av. 34# 16 - 12", "2135423", "07/06/2000", "Rojo"]
    ];

    $Significado = [
        "Verde" => "No se encuentra el significado.",
        "Amarillo" => "Riqueza y Alegr&iacutea.",
        "Rojo" => "No se encuentra el significado."
    ];

    //Se crea la tabla con los titulos con respectivo color
    echo "<table border=1>
        <thead>
        <tr>
        <th bgcolor='#69AFCA'>Nombre</th>
        <th bgcolor='#69AFCA'>Direcci&oacuten</th>
        <th bgcolor='#69AFCA'>Tel&eacutefono</th>
        <th bgcolor='#69AFCA'>Fecha de cumpleaños</th>
        <th bgcolor='#69AFCA'>Color favorito</th>
        <th bgcolor='#69AFCA'>Significado</th>
        </tr>
        </thead>
        <tbody>";

    //Se usa la función para recorrer el array Datos
    foreach ($Datos as &$Registro) {
        foreach ($Significado as $Nom => $Signi) { //Se usa la función para dividir en dos variables los datos del array Significados 
            if ($Registro[4] == $Nom) { //Se compara el dato de colores del array Datos con los del array Significados
                $Registro[] = $Signi; //Si son iguales guarda el significado en el array Datos
            }
        }

        //Se usa la funcion para imprimir la tabla
        foreach ($Registro as $Guardado) {
            echo "<td>" . $Guardado . "</td>";
        }
        echo "</tr>";
    } //Todo se hace mientras se recorre el array Datos
    ?>
</body>

</html>