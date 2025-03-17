
<?php

$num1 = 10;
$num2 = 5;
$operacion = 'suma';


switch ($operacion) {
    case 'suma':
        $resultado = $num1 + $num2;
        break;
    case 'resta':
        $resultado = $num1 - $num2;
        break;
    case 'multiplicacion':
        $resultado = $num1 * $num2;
        break;
    case 'division':
        $resultado = ($num2 != 0) ? $num1 / $num2 : 'Error: División por cero';
        break;
    default:
        $resultado = 'Operación no válida';
}


echo "El resultado de la $operacion entre $num1 y $num2 es: $resultado";
?>