<?php

$anio = 2022;


if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
    $mensaje = "$anio es un año bisiesto.";
} else {
    $mensaje = "$anio no es un año bisiesto.";
}


echo $mensaje;
?>