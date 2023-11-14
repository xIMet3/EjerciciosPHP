<?php

/* Las clases hacen referencia a un objeto en particular */

class estudiante
{

    public $nombre; # No es necesario poner public ya que de por si son publicas.
    public $edad;
    public $institucion;

    public function datos($nombre, $edad, $institucion)
    {

        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->escuela = $institucion;

        echo "El estudiante $nombre con la edad de $edad pertenece a la institucion $institucion.";
    }
}

# Creacion de un objeto a instanciar.
$escuela = new estudiante();

echo $escuela -> datos("Pedro", "20 años","Fresedo");
echo "<br>";
// echo $escuela -> nombre;

?>
