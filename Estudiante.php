<?php

include_once("Humano.php");
include_once("Persona.php");

$estudiante1 = new humano("Enrique", "Mejia", "23/02/1991", "53789456Y"); # Hereda datos de la clase humano.

echo $estudiante1;
echo "<br>";

$estudiante2 = new persona("Ana","Maria","30-04-1998","53123456Q",722456789);  # Hereda datos de la clase persona y añade un nuevo dato(telefono).
echo $estudiante2;