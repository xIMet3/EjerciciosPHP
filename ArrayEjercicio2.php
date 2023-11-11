<?php

    /*Realiza un programa el cual saque el contenido del array pero debe
     detenerse cuando el conteo llegue a la mitad, es decir, que solo muestre 
     la mitad de los datos*/

     $numeros = [1,2,3,4,5,6,7,8,9,10];
     $longitud = count($numeros); #Realiza un conteo del array y lo asigna a la variable $longitud

     for ($i = 0; $i < $longitud / 2 ; $i++) { #Si iterador es menor a $longitud dividido entre dos, i++
        
        $contenido = $numeros[$i]; #Se asigna el valor del iterador a la variable $contenido
        echo $contenido; #Imprime el valor de $contenido
        echo "<br>";

     }

?>