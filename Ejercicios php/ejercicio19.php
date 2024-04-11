<?php
echo "Ingresa un texto: ";
$texto = trim(fgets(STDIN));

echo "Ingresa las palabras prohibidas (separadas por comas): ";
$palabrasProhibidas = trim(fgets(STDIN));

$listaProhibidas = explode(",", $palabrasProhibidas);

foreach ($listaProhibidas as $palabra) {
    $texto = str_ireplace(trim($palabra), "*", $texto);
}

echo "Texto censurado:\n$texto\n";
?>
