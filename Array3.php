<?php

    /*Diferentes formas de declarar un array*/
    # Arreglo practicas 4

    $canales = ["Canal 2", "Canal 4", "Canal 8", "Canal 12"];
    
    foreach ($canales as $key => $canal) { # Recorre el array y muestra el contenido de todas las posiciones

        echo "$key ------- $canal";
        echo "<br>";

    }

    echo "<br>";

    # Forma uno por uno

    $nombre[] = "Diego";

    var_dump($nombre); # Tipo de variable, {[posicion], tipo de dato, (numero de caracteres que contiene), valor}
    echo "<br>";
    echo "<br>";


    $nombre2[9] = "Alicia"; # Cambia la posicion a la 9
    var_dump($nombre2);
    echo "<br>";
    echo "<br>";

    echo $canales[0]; 
    echo "<br>";    
    echo $canales[1]; 
    echo "<br>";          # Muestra el valor de la posicion dentro del array uno a uno
    echo $canales[2]; 
    echo "<br>";
    echo $canales[3];
    echo "<br>";
    echo "<br>";

    echo $canales[3] = "Canal Fox"; # Cambia el valor de la posicion 3 del array por "Canal Fox"





?>