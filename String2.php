<?php

    /*Realiza un texto en el cual se pueda buscar la posicion de la primera letra de una palabra
    y muestre en pantalla esa posicion*/

    $Enunciado = "Hola soy un estudiante de la plataforma de aprendizaje Udemy. En esta ocasion vengo a contarles mi 
    experiencia dentro de esta plataforma y decirles que es mi primera biografia como estudiante, 
    recomendando una pagina de aprendizaje que abre muchas puertas al futuro laboral.";

    echo $Enunciado;

    $Busqueda = "plataforma";

    echo "<br>","<br>";
    echo strpos($Enunciado,$Busqueda);

    
?>