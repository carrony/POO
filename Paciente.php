<?php 

class Paciente {
    private $dni;
    private $nombre;
    private $apellidos;
    private $domicilio;
    private $telefono;
    private $altura;
    private $peso;

    public function __construct($dni, $nombre, $apellidos, $domicilio, $telefono) {
        $this->dni=$dni;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->domicilio=$domicilio;
        $this->telefono=$telefono;
        $this->altura=0;
        $this->peso=0.0;
    }

    // setter y getters

    /**
     * Método que establece el valor del peso
     * @param $peso valor de tipo float positivo 
     */
    public function setPeso($peso):self {
        if ($peso>=0) {   
            $this->peso=$peso;
        }
        return $this;
    }

    /**
     * Método que devuelve el peso de un paciente
     */
    public function getPeso() {
        return $this->peso;
    }

    /* Constructores reducidos de PHP 8.0.1 
    public function __constructor(private $dni,  private $nombre,
    private $apellidos,
    private $domicilio,
    private $telefono,
    private $altura,
    private $peso){};*/

    /**
     * Get the value of dni
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     */
    public function setDni($dni): self
    {
        $this->dni = $dni;
        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos($apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of domicilio
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set the value of domicilio
     */
    public function setDomicilio($domicilio): self
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     */
    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        if ($altura>=0) {
            $this->altura = $altura;
        } 
        return $this;
    }

    public function __toString()
    {
        return "<ul>\n".
               "<li> DNI: $this->dni</li>\n".
               "<li> Nombre: $this->nombre</li>\n".
               "<li> Apellidos: $this->apellidos</li>\n".
               "<li> Domicilio: $this->domicilio</li>\n".
               "<li> Teléfono: $this->telefono</li>\n".
               "<li> Altura: $this->altura</li>\n".
               "<li> Peso: $this->peso</li>\n".
               "</ul>\n";
    }
}