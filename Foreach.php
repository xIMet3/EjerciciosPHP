<?php

    /*El ciclo foreach extrae el contenido de un array definiendo su limite con la cantidad
    de datos que se encuentren dentro del array, tambien nos permite mostrar el espacio ocupado 
    por cada dato y a su vez redefinir la variable para usarla dentro del ciclo*/

    $nombres = ["Kevin", "Arnoldo", "Jefferson", "Pamela", "Gabriel"]; //Declara las variables
    
    //Define el ciclo foreach
    foreach ($nombres as $key => $nom){ //Define el array, los campos, y redefine el array

        //$key muestra el numero de la posicion que ocupa en el array
        echo "$key ","----------->","$nom "; //Muestra los campos -----> y el contenido del array redefinido
        echo "<br>";

    }

?>