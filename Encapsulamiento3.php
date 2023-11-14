<?php

/* El nivel de acceso protected es igual a el nivel de acceso private */ 

class operacion{

    protected $resultado = 40;

    function suma ($numero1, $numero2){

        $resultado = $numero1+$numero2;
        echo "La suma del numero $numero1 y el numero $numero2 es igual a: $resultado";

    }
}

// $consulta = new operacion ();

// $consulta->suma(10,10);
// echo $consulta->resultado;