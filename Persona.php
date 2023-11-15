<?php

class persona extends humano { # Los datos se extienden de la clase humano(no necesita el include_once).

    function __construct($nombre, $apellido, $fecha, $dni, $telefono){ # Variables de inicializacion.
        
        parent::__construct($nombre, $apellido, $fecha, $dni); # Enlaza los datos de la clase.
        $this->telefono = $telefono; # Agrega la nueva variable.

    }

    function __toString()
    {
        return $this->nombre. " ". $this->apellido. " ". $this->fecha. " ". $this->tarjeta. " ". $this->telefono;
    }

}