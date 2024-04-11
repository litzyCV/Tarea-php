<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        switch ($operation) {
            case "sum":
                $result = $num1 + $num2;
                echo "Resultado de la suma: $result";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "Resultado de la resta: $result";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "Resultado de la multiplicación: $result";
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "Resultado de la división: $result";
                } else {
                    echo "No se puede dividir entre cero.";
                }
                break;
            default:
                echo "Operación no válida.";
        }
    }
    ?>