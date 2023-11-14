<?php

include_once("Encapsulamiento2.php");

$reporte = new maestro();

$reporte->datos_maestro("Josue Arnoldo Vasques", "40 años", "Octavo Grado B", 2004);
echo "<br>";

echo $reporte->codigo; # Si llamas a codigo_maestro no muestra nada, pero si llamas a codigo(encapsulado) si que lo muestra.

?>