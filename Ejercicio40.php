<html> 

<head> 
  <title>Verificar Mayoría de Edad</title> 
</head> 

<body> 

  <?php 

  $edad = rand(10, 30); 

  
  if ($edad >= 18) {
      echo "El usuario tiene $edad años y es mayor de edad.";
  } else {
      echo "El usuario tiene $edad años y es menor de edad.";
  }

  ?> 

</body> 

</html>

