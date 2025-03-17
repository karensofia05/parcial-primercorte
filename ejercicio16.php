<?php

$calificaciones = [85, 90, 78, 92, 88];


$promedio = array_sum($calificaciones) / count($calificaciones);


echo "El promedio de las calificaciones es: " . number_format($promedio, 2) . "\n";
?>

