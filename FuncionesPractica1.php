<?php

    /* Realiza operaciones aritmeticas utilizando las funciones*/ 

    function valor ($numero1, $numero2, $numero3, $numero4, $numero5){

        echo "$numero1 X $numero2 = ".($numero1*$numero2);
        echo "<br>";

        echo "$numero3 X $numero5 = ".($numero3*$numero5);
        echo "<br>";

        echo "$numero4 X $numero2 = ".($numero4*$numero2);
        echo "<br>";

        echo "$numero3 X $numero4 = ".($numero3*$numero4);

    };

    valor(1, 2, 3, 5, 10);

?>