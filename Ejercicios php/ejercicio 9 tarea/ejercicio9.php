<?php
function contar_palabras($texto) {
    $palabras = explode(" ", $texto);
    return count($palabras);
}

$cadena_usuario = "Esta es otra cadena con más palabras.";

$resultado = contar_palabras($cadena_usuario);

echo "Número de palabras en la cadena: $resultado";
?>
