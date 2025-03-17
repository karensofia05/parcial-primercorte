<?php

function factorial($numero) {
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}


$numero = 5; 


echo "El factorial de $numero es: " . factorial($numero);
?>