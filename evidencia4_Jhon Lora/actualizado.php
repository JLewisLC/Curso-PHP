<!DOCTYPE html>
<html>

<head>
    <title>Actualizar estado</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <!--
       Desarrollador: LEWIS
    Programa de formación: DESARROLLO WEB CON PHP (2441671)
    Evidencia: USO DE FORMULARIOS PARA TRANSFERENCIA
    -->
</head>

<body>
    <?php
    //Esta función actualiza los datos con la acción que se realizo
    function Accion($fila, $puesto, $accion, $lista)
    {
        //Se pregunta el estado actual de la ubicación seleccionada para realizar la accion determinada
        //para cada caso
        if ($lista[$fila - 1][$puesto - 1] == "L") { 
            $lista[$fila - 1][$puesto - 1] = $accion;
        }
        else if ($lista[$fila - 1][$puesto - 1] == "V") {
            if ($accion == "L" or $accion == "R" or $accion == "V") {
                //Se envia mensaje de advertencia cuando se intenta liberar o reservar una boleta vendida
                echo '<script language="javascript">alert("Boleta vendida, intente otra ubicación");</script>';
            }
        }
        else if ($lista[$fila - 1][$puesto - 1] == "R" and $accion != "R") {
            $lista[$fila - 1][$puesto - 1] = $accion;
        }
        
        return $lista; //Regresa el valor de la lista al index
    }
    ?>
</body>

</html>