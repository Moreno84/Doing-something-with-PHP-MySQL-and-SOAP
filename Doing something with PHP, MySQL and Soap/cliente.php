<?php
require_once("lib/nusoap.php");
$cliente = new soapclient("http://localhost/Desarrollo%20web%20en%20entorno%20servidor-M07/DAW_M07_T06_ACT5_Jose%20Ivan%20Moreno/servidor.php?wsdl");
$funciones =$cliente->__getFunctions();
var_dump($funciones);
echo "<br/><br/>";


$resultado = $cliente->listaProductos();
var_dump($resultado);
echo "<br/><br/>";









?>