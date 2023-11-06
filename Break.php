<?php

    /*El break es una instruccion que permite detener el codigo en cierto punto,
     siempre y cuando se cumpla una condicion*/


     for ($i=0; $i <= 20 ; $i++) {
         
        echo "$i <br>";
        if($i == 10){
            break;
        }


     }

     
     $letra = "c";

     switch ($letra){
        //No entra en el case 'a'
        case 'a':
            echo "$letra";
            break;
            //No entra en el case 'b'
            case 'b':
                echo "$letra";
                break;
        //Entonces se ejecuta el default        
        default:
        echo "No se encontró el resultado";
        break;
     }





?>