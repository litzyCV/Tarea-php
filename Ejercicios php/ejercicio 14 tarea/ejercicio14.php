<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el texto ingresado por el usuario
        $texto = $_POST["texto"];

        // Eliminar los espacios en blanco
        $textoSinEspacios = str_replace(" ", "", $texto);

        // Contar la longitud del texto sin espacios
        $longitud = strlen($textoSinEspacios);

        echo "<p>El texto tiene <strong>$longitud</strong> caracteres (sin contar espacios).</p>";
    }
    ?>