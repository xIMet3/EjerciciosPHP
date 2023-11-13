<?php

    /*Realiza un conteo de numeros utilizando el ciclo que mas te convenga,
    pero este debe ser llamado mediante una funcion*/ 

    function conteo($inicio, $fin){

        for ($i = $inicio; $i <= $fin ; $i++) {
            
            echo $i;
            echo "<br>";

        }
    }
    conteo(0,20);

?>