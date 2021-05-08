<?php

require_once("autoload.php");

$objEmpleado = new Empleado('Pepe','Pérez','pepe@es.es');
echo $objEmpleado->getDatosPersona();
$objEmpleado->setPuesto("Admin");
echo 'Puesto: '.  $objEmpleado->getPuesto();

echo '<br />';

$objCliente = new Cliente("María","Fernández","maria@es.es");
echo $objCliente->getDatosPersona();
$objCliente->setCredito(16000);
echo 'Crédito ' . $objCliente->getCredito();





