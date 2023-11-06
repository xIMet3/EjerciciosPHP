<?php

    /*El break sirve para detener el flujo del codigo en un momento determinado*/ 
    /*Realizar la tabla de multiplicar y que se detenga en el numero 5*/


    $i = 0;
    $tabla = 10;
    $Multiplicacion = "";

    while ($i <= 10) {
        if($i > 5){
            break;
        }
        $Multiplicacion = $tabla*$i;
        echo "$tabla x $i = $Multiplicacion";
        echo "<br>";
        $i++;
    }

    echo "<br><br><br>";

    for ($a=0; $a <= 10 ; $a++) { 
        if($a > 8){
            break;
        }
        $Multiplicacion = $tabla*$a;
        echo "$tabla x $a = $Multiplicacion";
        echo "<br>";

    }












?>