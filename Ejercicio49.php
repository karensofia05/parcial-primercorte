<?php

$fecha = "2024-05-09";


$numeroDia = date("w", strtotime($fecha));


if ($numeroDia == 0) {
    $diaSemana = "Domingo";
} else if ($numeroDia == 1) {
    $diaSemana = "Lunes";
} else if ($numeroDia == 2) {
    $diaSemana = "Martes";
} else if ($numeroDia == 3) {
    $diaSemana = "Miércoles";
} else if ($numeroDia == 4) {
    $diaSemana = "Jueves";
} else if ($numeroDia == 5) {
    $diaSemana = "Viernes";
} else {
    $diaSemana = "Sábado";
}


echo "La fecha $fecha corresponde a: $diaSemana <br>";
?>
