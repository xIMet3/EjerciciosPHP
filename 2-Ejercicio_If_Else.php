<?php

/* 
Un videojuego esta diseñado para que ciertas recompensas sean desbloqueadas hasta cierto nivel,
las recompensas de rango leyenda se desbloquean al nivel 150, las recompensas de rango oro se desbloquean 
al nivel 50.

Un jugador quiere acceder a las recompensas, pero este jugador es un nivel inferior al rango leyenda
y tendra que acoplarse a las recompensas de rango oro.

Asignale el nivel al jugador para que obtenga las recompensas de rango oro y luego asignale los niveles necesarios
para que pueda reclamar las recompensas de rango Leyenda

*/

$jugador = 30;
$leyenda = 150;
$Oro = 50;



if($jugador >= $leyenda){
    echo "Felicidades, ahora puedes obtener las recompensas del rango leyenda";
}

if($jugador >= $Oro && $jugador <= $leyenda){
    echo "Felicidades, ahora puedes obtener las recompensas del rango oro";
}
// else{
//     echo "Lo sentimos, tu nivel no es suficiente para obtener grandes recompensas, ¡Esfuerzate!";
// }
if($jugador < $Oro){
    echo "Lo sentimos, tu nivel no es suficiente para obtener grandes recompensas, ¡Esfuerzate!";
}