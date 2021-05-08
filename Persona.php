<?php


class Persona{
    private $strNombre;
    private $strApellidos;
    private $strEmail;

    public function __construct(string $nombre, string $apellidos, string $email)
    {
        $this->strNombre = $nombre;
        $this->strApellidos = $apellidos;
        $this->strEmail = $email;
    }

    public function getDatosPersona()
    {
        $datos  = "
            <h2>Datos personales</h2>
            Nombre: {$this->strNombre}<br>
            Apellidos: {$this->strApellidos}<br>
            Email: {$this->strEmail}<br>
        ";

        return $datos;
    }



}