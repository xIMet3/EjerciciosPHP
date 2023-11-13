<?php

    /*Realizaremos un ejercicio declarando variables y valores dentro de los parametros*/ 

    function estudiante ($nombre,$edad,$seccion,$turno){

        echo "El estudiante $nombre de edad de $edad pertenece a la seccion $seccion del turno $turno.";
        echo "<br>";

    }

    estudiante("Denis","18 años","Octavo A","Vespertino");
    echo "<br>";



    # Otra manera

    function alumno ($nombre = "Denise", $edad = "18 años", $seccion = "Octavo A", $turno = "Vespertino"){

        echo "El alumno $nombre de edad de $edad pertenece a la seccion $seccion del turno $turno.";
        echo "<br>";
        echo "<br>";

    }
    alumno();
    alumno("Carlos","19 años","Octavo A","Vespertino"); # Asi sobreescribo los datos de la variable $alumno

    

?>