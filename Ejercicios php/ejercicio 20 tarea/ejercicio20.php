<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") 
        $nombre = $_POST["nombre"];

        $ganador = rand(1, 2);

        if ($ganador === 1) {
            echo "<p>Felicidades, $nombre, ¡has ganado!</p>";
        } else {
            echo "<p>Lo siento, $nombre, no has ganado esta vez.</p>";
        }
    }
    ?>