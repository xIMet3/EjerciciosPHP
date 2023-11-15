<?php

class automovil
{

    public $nombre;
    public $modelo;
    public $fecha_lanzamiento;

    function __construct($nombre, $modelo, $fecha_lanzamiento) # __contruct define las variables iniciales.
    {
        $this->nombre = $nombre;
        $this->modelo = $modelo;
        $this->lanzamiento = $fecha_lanzamiento;  # $this-> referencia los nombres de las variables.
    }

    function __toString()
    {
        return $this->nombre. " " .$this->modelo. " " .$this->lanzamiento; # __toString devuelve el objeto automovil en una cadena de texto.
    }
}
