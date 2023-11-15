<?php

# CLASE PADRE
include_once ("Raza1.php");
include_once ("Raza2.php");  # Incluye los 2 archivos

class perro1 extends chihuahua {

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

class perro2 extends bulldog {

    function __construct($nombre_bull, $edad_bull, $estatura_bull, $raza)
    {
        parent:: __construct($nombre_bull, $edad_bull, $estatura_bull, $raza);
        $this->raza = $raza;
    }
    function __toString()
    {
        return $this->nombre. " ". $this->edad. " ". $this->estatura. " ". $this->raza;
    }


}
