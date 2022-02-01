<!DOCTYPE html>
<html> 
    <head> 
        <title>Unidad 4 - Ejemplo 1 - Cambia Color</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <?php
    /* En esta programa se van a usar los vínculos para pasar datos a través de 
     * la URL con PHP, para este caso los datos se envían a la misma página
     */
    /* En la siguiente rutina se va a evaluar si la variable del sistem $_GET ya 
     * contiene datos, si es asi se construye la etiqueta de apertura del objeto
     * body de la página web con la información de color que haya llegado 
     * por la URL, se debe recordar que la variable $_GET es la que 
     * recibe los datos cuando se envían a través de una URL
     */
    if (isset($_GET['colorFondo'])) {
        /* Se almacena el dato que llega desde la URL en la variable
         * $colorFondo, el indice en el que llega el dato es el nombre de la
         * variable que se puso en el hipervínculo
         */
        $colorFondo = $_GET['colorFondo'];
        echo "<body bgcolor = '$colorFondo'>";
        /* Se eliminan los datos de la variable $_GET para que la condición 
         * anterior no se cumpla cuando se vuelva a cargar la página
         */
        unset($_GET);
        /* Se construye un hipervínculo normal que devuelve al usuario a la 
         * página original, que en este caso es la misma pero se va a cargar de 
         * nuevo con el "menú" de colores
         */
        echo "<a href = 'cambiaColor.php'>Volver al inicio</a>";
    } else {
        /* Si la variable $_GET aún no se ha inicializado se construye la 
         * página con los hipervínculos necesarios para poder pasar la información
         * cada hipervínculo lleva una variable con un valor diferente, que
         * es la palabra del color en inglés para poder usarla al construir el 
         * objeto body en la parte anterior del condicional
         */
        echo "<body>";
        echo "<h3>Al dar clic en cualquiera de los siguientes hiperv&iacute;nculos"
        . " podr&aacute;s cambiar el color de fondo de la p&aacute;gina</h3>";
        echo "<a href = 'cambiaColor.php?colorFondo=yellow'>Fondo Amarillo</a>"
        . "<br />";
        echo "<a href = 'cambiaColor.php?colorFondo=blue'>Fondo Azul</a>"
        . "<br />";
        echo "<a href = 'cambiaColor.php?colorFondo=red'>Fondo Rojo</a>"
        . "<br />";
    }
    ?>
</body>
</html>