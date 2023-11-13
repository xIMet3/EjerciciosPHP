<?php

    /*Realizar una funcion (programa) que me muestre los siguientes datos :

        1- Nombre profesor
        2- Edad profesor
        3- Aula asignada */

    
    #1ª manera:

    function maestro (){ # Aqui se declaran las variables dentro de la funcion.

        $nombre = "Juan Rodriguez";
        $edad = 30;
        $aula = "Octavo Grado";

        echo "El profesor $nombre tiene la edad de $edad años y es encargado del salon de $aula";

    }

    maestro (); # Vacio porque ya se han declarado las variables.

    echo "<br>";
    echo "<br>";

    #Segunda manera:

    function profesor ($nombre, $edad, $aula){ # Aqui primero se llama a las variables.

        echo "El profesor $nombre tiene la edad de $edad años y es encargado del salon de $aula";

    }

    profesor ("Juan Rodriguez", 30, "Octavo Grado"); # Y aqui es donde se declaran las variables.

?>