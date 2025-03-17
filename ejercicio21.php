<?php

$numero = rand(1, 100);
$intentos = [10, 25, 50, 75, 90]; 

foreach ($intentos as $intento) {
    if ($intento === $numero) {
        $mensaje = "¡Felicidades! El número era $numero y fue adivinado en el intento $intento.";
        break;
    } elseif ($intento < $numero) {
        $mensaje = "Intento $intento: Demasiado bajo.";
    } else {
        $mensaje = "Intento $intento: Demasiado alto.";
    }
    echo $mensaje . "<br>";
}


if ($intento !== $numero) {
    echo "El número era $numero. No se adivinó en los intentos dados.";
}
?>