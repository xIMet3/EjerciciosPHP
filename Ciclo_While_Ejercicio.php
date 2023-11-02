<?php
    // Tablas de multiplicar
    // Tabla del 5

    $i = 1;
    $tabla = 5;
    $resultado = 0; 

    while($i <= 10){
        
        $resultado = $tabla*$i;
        
        echo $tabla. " X ". $i." = ". $resultado;
        echo "<br>";
        

        $i++;

    }


?>