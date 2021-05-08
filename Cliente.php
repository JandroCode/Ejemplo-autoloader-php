<?php

require_once("autoload.php");

class Cliente extends Persona{

    protected $floatCredito;

    public function __construct(string $nombre, string $apellidos, string $email)
    {
        parent::__construct($nombre, $apellidos, $email);
    }

    public function setCredito(float $credito){
        $this->floatCredito = $credito;
    }

    public function getCredito():float
    {
        return $this->floatCredito;  
    }


}