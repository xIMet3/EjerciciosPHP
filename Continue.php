<?php

    /*La intruccion continue se salta cierta linea de codigo o
    instruccion permitiendo ejecutar una linea distinta*/

    for ($i=0; $i <= 20; $i++) { #inicia el contador, variables, etc..
        if(($i%2)== 0){ #evalua si el numero es multiplo de 2
            continue; #salta los numeros que al dividirse entre si su residuo es 0
        }
        echo $i; #muestra la variable saltandose los numero multiplos de 2
        echo "<br>";
    }


?>