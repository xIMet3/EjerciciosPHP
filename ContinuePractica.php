<?php

    /*Realiza un programa el cual me omita lo que es un numero en especifico*/

    for ($i=0; $i <= 20 ; $i++) {

        if($i == 5){ #Se salta el numero 5
            continue;
        }
        echo $i;
        echo "<br>";

    }

?>