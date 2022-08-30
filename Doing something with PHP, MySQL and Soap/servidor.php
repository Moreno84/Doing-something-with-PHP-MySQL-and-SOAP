<?php

require_once("lib/nusoap.php");
$namespace = "http://localhost/DAW_07_T06_ACT5_Jose_Ivan_Moreno/servidor.php";
$server = new soap_server();
$server->configureWSDL("MiServicioWeb", $namespace);
$server->schemaTargetNamespace = $namespace;
$server->soap_defencoding = 'UTF-8';

//Funcion
function listaProductos(){
    require_once('datos.php');
    $misProductos = array();
    $conexion =	mysqli_connect($host,$user,$pass,$db_name);
    $query = "select * from producto where categoria = 1";
    $productos = mysqli_query($conexion,$query);
    while($producto = mysqli_fetch_assoc($productos)){
        $misProductos[] = $producto;
    }
    mysqli_close($conexion);
    return $misProductos;

}

//Definicion de tipos complejos
$server->wsdl->addComplexType(
    'Producto',
    'complexType',
    'struct',
    'all',
    '',
    array(
        'identificador' => array('name'=>'identificador', 'type'=>'xsd:int'),
        'nombre' => array('name'=>'nombre', 'type'=>'xsd:string'),
        'categoria' => array('name'=>'categoria', 'type'=>'xsd:int')
    )
);

$server->wsdl->addComplexType(
    'ArrayProductos',
    'complexType',
    'array',
    '',
    'SOAP-ENC:Array',
    array(),
    array(array('ref'=>'SOAP-ENC:arrayType', 'wsdl:arrayType'=>'tns:Producto[]')),
    'tns:Producto'
);

//Registro de funciones

$server->register(
    'listaProductos',
    array(),
    array('return'=>'tns:ArrayProductos'),
    $namespace,
    false,
    'rpc',
    'encoded',
    'Funcion que devuelve un array con los productos de una base de datos.'
    );

  

    $server->service(file_get_contents("php://input"));




?>