<?php

//str_replace Reemplazar una palabra dentro de una cadena de texto

$Enunciado = "Es un hecho establecido hace demasiado tiempo que un 
lector se distraerá con el contenido del texto de un sitio mientras que mira su 
diseño. El punto de usar Lorem Ipsum es que tiene una distribucion 
más o menos normal de las letras, al contrario de usar texto como 
por ejemplo  Estos texto hacen pare
cerlo un español que se puede leer.";

echo $Enunciado;
echo "<br><br>";

echo "Texto modificado: ". str_replace("demasiado","MUCHO", $Enunciado);
#str_replace("palabra a cambiar", "palabra por la que se va a cambiar", $variable que se va a imprimir)

?>


