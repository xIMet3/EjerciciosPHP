<?php

/* EL nivel de acceso private permite acceder a la variable, clase o funcion
 en el mismo archivo dentro de la clase definida, pero no directamente desde otro archivo, pero si podemos
hacerlo de forma indirecta */

class maestro
{

    private $codigo_maestro = 123456; # Al estar en private solo se muestra si se le llama desde dentro de la funcion, o indirectamente llamando a la funcion.
    public $nombre;
    public $edad;
    public $salon_asignado;

    public function datos_maestro($nombre, $edad, $salon_asignado, $codigo_maestro)
    {

        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->salon = $salon_asignado;
        $this->codigo = $codigo_maestro;

        echo "El maestro: $nombre con la edad de  $edad tiene asignado el salon 
        de: $salon_asignado y su codigo de maestro es: $codigo_maestro";
    }
}

// $reporte = new maestro();

// $reporte->datos_maestro("Arnoldo Enrique Mejia", "25 años", "Primer año de Bachillerato", 23021991);
// echo "<br>";

// echo $reporte->codigo_maestro;

?>