<?php

    /*Else if se denomina como una opcion secundaria al if*/

    //Para averiguar si un numero es menor, igual o mayor a 10 ¿Que tengo que hacer?

    $numero = "-3";

    if($numero == 10){
        echo "El numero ingresado es igual a 10";
    }
    elseif($numero > 10){
    echo "El numero ingresado es mayor a 10";
    }

    elseif($numero < 10 && $numero > 0){
        echo "El numero ingresado es menor a 10";
    }

    elseif($numero < 0){
        echo "El valor ingresado es negativo";
    }






?>