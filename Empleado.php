<?php


require_once("autoload.php");

class Empleado extends Persona{

    protected $strPuesto;

    public function __construct(string $nombre, string $apellidos, string $email)
    {
        parent::__construct($nombre, $apellidos, $email);
    }

    public function setPuesto(string $puesto)
    {
        $this->strPuesto = $puesto;
    }

    public function getPuesto():string
    {
        return $this->strPuesto;
    }


}