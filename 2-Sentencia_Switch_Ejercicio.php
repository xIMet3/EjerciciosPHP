<?php

/*

Al lado de un cafetin escolar hay una maquina expendedora, la cual tiene diversos productos
que los estudiantes pueden escoger para comprar y consumir.

Entre los productos que ofrece la maquina estan los siguientes y sus posiciones:

1- Galletas.
2- Sodas.
3- Churros.
4- Dulces.

Cuando un estudiante ingresa un numero que no est asociado a un producto la maaquina
le indica un mensaje de error y le pide que escoja un producto de la lista.

*/

$Alumno = 10;

switch ($Alumno) {
    case '1':
        echo "Has seleccionado Galletas. <br>";
        echo "Producto entregado";
        break;

        case '2':
            echo "Has seleccionado Sodas <br>";
            echo "Producto entregado";
            break;

            case '3':
                echo "Has seleccionado Churros <br>";
                echo "Producto entregado";
                break;

                case '4':
                    echo "Has seleccionado Dulces <br>";
                    echo "Producto entregado";
                    break;
    
    default:
        echo "¡Error! Producto no encontrado <br>";
        echo "Escoja un producto de la lista.";
        break;
}


