<?php
/* Realizar un programa el cual me diga si el nombre digitado esta en la lista de alumnos (Utiliza la Sentencia Switch) */

    $alumno = "Ramiro";

    switch ($alumno) {
        case 'Rodrigo':
        case 'Hernandez':
        case 'Josue':
        case 'Pedro':

    // Minusculas    
        case 'rodrigo':
        case 'hernandez':
        case 'josue':
        case 'pedro':

            echo "$alumno esta en la lista de alumnos.";
            break;
        
        default:
            echo "$alumno no esta en la lista de alumnos. <br>";
            echo "Intentelo de nuevo.";
            break;
    }
