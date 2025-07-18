<?php

class Coche {
    // atributos del objeto
    private $marca;
    private $modelo;
    public $velocidad;

    // Comportamiento
    // método especial de la clase que sirve para inicializar el objeto
    public function __construct($marca="no definido", $modelo="no definido")
    {
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->velocidad=0;
    }

    public function escribeCoche() {
        echo "<p><strong>Marca:</strong> $this->marca </p>";
        echo "<p><strong>Modelo:</strong> $this->modelo </p>";
    }
   /* public static function __construct2()
    {
        $this->marca="no definido";
        $this->modelo="no definido";
        $this->velocidad=0;
    }*/

}

?>