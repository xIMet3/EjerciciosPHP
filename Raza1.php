<?php

# CLASE HIJA
class chihuahua {

    function __construct($nombre, $edad, $estatura)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->estatura = $estatura;
    }

    function __toString()
    {
        return $this->nombre. " ". $this->edad. " ". $this->estatura;
    }

}