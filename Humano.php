<?php

class humano {

    public $nombre;
    public $apellido;
    public $fecha_nacimiento;
    public $dni;

    function __construct($nombre, $apellido, $fecha_nacimiento, $dni){ # Aqui indica las caracteristicas que va a tener la clase humano.

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha = $fecha_nacimiento; # Ahora fecha contiene los datos de $fecha_nacimiento.
        $this->tarjeta = $dni;

    }
    
    function __toString()
    {
        return $this->nombre. " ". $this->apellido. " ". $this->fecha. " ". $this->tarjeta; # Pasa a cadena de texto.
    }
        


}