<html> 

<head> 
  <title>Comparar Palabras</title> 
</head> 

<body> 

  <?php 

  $palabra1 = "Hola";
  $palabra2 = "hola";

  
  if (strcasecmp($palabra1, $palabra2) == 0) {
      echo "Las palabras \"$palabra1\" y \"$palabra2\" son iguales.";
  } else {
      echo "Las palabras \"$palabra1\" y \"$palabra2\" son diferentes.";
  }

  ?> 

</body> 

</html>
