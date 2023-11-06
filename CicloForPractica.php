<?php

$tabla = 10;
$resultado;

for($i = 0; $i <= 10; $i++){

    $resultado = $tabla*$i;
    echo "<br>";
    echo $resultado;
}
echo "<br>";

for($i = 10;$i > 0; $i--){

    $resultado = $i*$tabla;
    echo "<br>";
    echo $resultado;
}
?>