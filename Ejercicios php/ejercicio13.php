<?php
function generarContrasenaAleatoria($longitud) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';

    $totalCaracteres = strlen($caracteres);

    $contrasena = '';

    for ($i = 0; $i < $longitud; $i++) {
        $indice = rand(0, $totalCaracteres - 1);

        $contrasena .= $caracteres[$indice];
    }

    return $contrasena;
}

$longitudContrasena = 12;

$contrasenaGenerada = generarContrasenaAleatoria($longitudContrasena);

echo "Contraseña aleatoria generada: <strong>$contrasenaGenerada</strong>";
?>
