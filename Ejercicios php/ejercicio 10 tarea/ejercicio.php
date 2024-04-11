<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST["cadena"];

        $cadenaInversa = strrev($cadena);
        echo "<p>La cadena en orden inverso es: <strong>$cadenaInversa</strong></p>";
    }
    ?>