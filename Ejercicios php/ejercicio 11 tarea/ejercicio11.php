<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST["cantidad"];
        $moneda_origen = $_POST["moneda_origen"];

        $tasa_cambio_usd_eur = 0.85; 

        if ($moneda_origen === "USD") {
            $cantidad_convertida = $cantidad * $tasa_cambio_usd_eur;
            echo "<p>$cantidad USD equivale a <strong>$cantidad_convertida EUR</strong></p>";
        } elseif ($moneda_origen === "EUR") {
            $cantidad_convertida = $cantidad / $tasa_cambio_usd_eur;
            echo "<p>$cantidad EUR equivale a <strong>$cantidad_convertida USD</strong></p>";
        }
    }
    ?>