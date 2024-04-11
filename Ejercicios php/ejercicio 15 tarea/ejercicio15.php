<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el año ingresado por el usuario
        $anio = $_POST["anio"];

        // Verificar si es un año bisiesto
        if ((($anio % 4 == 0) && ($anio % 100 != 0)) || ($anio % 400 == 0)) {
            echo "<p>El año $anio es bisiesto.</p>";
        } else {
            echo "<p>El año $anio no es bisiesto.</p>";
        }
    }
    ?>