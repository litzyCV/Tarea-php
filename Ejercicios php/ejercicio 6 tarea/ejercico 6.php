<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST["edad"];
        if ($edad >= 18) {
            echo "Eres mayor de edad.";
        } else {
            echo "Debes ser mayor de 18 años para continuar.";
        }
    }
?>
