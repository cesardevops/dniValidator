<?php
error_reporting(E_ALL ^ E_NOTICE);

$dni = $_POST['dni'];

//OBTENEMOS EL VALOR
$dom = file_get_contents('http://aplicaciones007.jne.gob.pe/srop_publico/Consulta/Afiliado/GetNombresCiudadano?DNI=' . $dni);
$partes = explode("|", $dom);
$datos = array(
    "status"    => 'ok',
    "dni"       => $dni,
    "lastname"  => $partes[0],
    "surname"   => $partes[1],
    "names"     => $partes[2],
    "msg"       => $partes[3],
);

echo json_encode($datos);