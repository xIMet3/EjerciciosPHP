<?php

    /*Realizar un array asociativo*/

    $nombres = ["nombre1"=>"Diego", "nombre2"=>"Jefferson", "nombre3"=>"Alice", "nombre4"=>"Daniela", "nombre5"=>"Gaby"];

    foreach($nombres as $key => $nombre) {

        echo "$key -------------- $nombre";
        echo "<br>";

    }

    echo "<br>";

    var_dump($nombres);







?>