
<?php

$palabra = "jirafa";


$contador = preg_match_all('/[aeiou]/i', $palabra);


echo "La palabra '$palabra' contiene $contador vocal(es).";
?>