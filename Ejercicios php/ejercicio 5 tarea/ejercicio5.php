<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST["texto"]
        $mayusculas = strtoupper($cadena);

        $minusculas = strtolower($cadena);

        $longitud = strlen($cadena);

        echo "<h2>Resultado:</h2>";
        echo "<p>Cadena en mayúsculas: $mayusculas</p>";
        echo "<p>Cadena en minúsculas: $minusculas</p>";
        echo "<p>Cantidad de caracteres: $longitud</p>";
    }
    ?>