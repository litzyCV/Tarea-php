<?php
$radio = 5;

$area_circulo = pi() * pow($radio, 2);
$perimetro_circulo = 2 * pi() * $radio;

echo "Área del círculo: $area_circulo<br>";
echo "Perímetro del círculo: $perimetro_circulo";

$lado_cuadrado = 8; 

$area_cuadrado = pow($lado_cuadrado, 2);
$perimetro_cuadrado = 4 * $lado_cuadrado;

echo "Área del cuadrado: $area_cuadrado<br>";
echo "Perímetro del cuadrado: $perimetro_cuadrado";

$longitud_rectangulo = 10; 
$ancho_rectangulo = 6;   

$area_rectangulo = $longitud_rectangulo * $ancho_rectangulo;
$perimetro_rectangulo = 2 * ($longitud_rectangulo + $ancho_rectangulo);

echo "Área del rectángulo: $area_rectangulo<br>";
echo "Perímetro del rectángulo: $perimetro_rectangulo";
?>
