<?php

    /* Realizar un programa el cual muestro los arrays sin necesidad
    de utiliza el ciclo foreach*/

    $arreglo = [2,4,6,8,10,12,14,16,18];

    for ($i=0; $i < count($arreglo) ; $i++) { #Count cuenta el numero de posiciones dentro del array

        echo $arreglo[$i]; #Muestra el valor de la posicion del array en que esta el iterador
        echo "<br>"; 
    }

    echo "<br>";
    echo $arreglo[1] = "Hola como estas"; #Cambia el valor de la posicion 1 por el nuevo valor "Hola como estas"

?>