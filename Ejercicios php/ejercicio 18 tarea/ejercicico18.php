<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "La dirección de correo electrónico es válida.";
    } else {
        echo "La dirección de correo electrónico no es válida.";
    }
}
?>
