<?php
if (isset($_POST["enviar"]) && isset($_POST["unidad"])) {
    $temp = $_POST['temp'];
    $converted = 0;

    if ($_POST["unidad"] == 'btn-celsius') {
        $converted = ($temp * 9 / 5) + 32;
        echo "La temperatura de ºC a ºF es de: " . ceil($converted);
    } elseif ($_POST["unidad"] == 'btn-fahrenheit') {
        $converted = ($temp - 32) * 5 / 9;
        echo "La temperatura de ºF a ºC es de: " . ceil($converted);
    } elseif ($_POST["unidad"] == 'btn-kelvin') {
        $converted = $temp + 273.15;
        echo "La temperatura de ºC a K es de: " . ceil($converted);
    }
}
?>
