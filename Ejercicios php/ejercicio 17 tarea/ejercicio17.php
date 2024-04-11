<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $hoy = date("Y-m-d");

        $nacimiento = new DateTime($fecha_nacimiento);
        $actual = new DateTime($hoy);

        $diferencia = $nacimiento->diff($actual);

        $anios = $diferencia->y;
        $meses = $diferencia->m;
        $dias = $diferencia->d;

        echo "<p>Tienes $anios años, $meses meses y $dias días.</p>";
    }
    ?>