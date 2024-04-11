<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura ** 2);

        if ($imc < 18.5) {
            $nivel = "Bajo de peso";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            $nivel = "Peso normal";
        } elseif ($imc >= 24.9 && $imc < 30) {
            $nivel = "Sobrepeso";
        } else {
            $nivel = "Obesidad";
        }

        echo "<p>Tu IMC es: <strong>$imc</strong></p>";
        echo "<p>Nivel de IMC: $nivel</p>";
    }
    ?>