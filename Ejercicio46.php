<?php
// Lista de precios
$precio1 = 120;
$precio2 = 280;
$precio3 = 45;
$precio4 = 305;
$precio5 = 190;

// Suponemos que el primer precio es el mayor
$maximo = $precio1;

// Comparaciones para encontrar el mayor precio
if ($precio2 > $maximo) {
    $maximo = $precio2;
}
if ($precio3 > $maximo) {
    $maximo = $precio3;
}
if ($precio4 > $maximo) {
    $maximo = $precio4;
}
if ($precio5 > $maximo) {
    $maximo = $precio5;
}

// Mostrar la lista de precios
echo "Lista de precios: $precio1, $precio2, $precio3, $precio4, $precio5 <br>";

// Mostrar el precio más alto
echo "El precio más alto es: $maximo";
?>
