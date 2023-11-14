<?php

# include_once o include permite referenciar un archivo y extraer sus datos

include_once("Encapsulamiento.php");

$escuela = new estudiante();

$escuela -> datos("Rodrigo","19 años","Francisco");
echo "<br>";
echo "La edad del estudiante es ".$escuela -> edad;

?>