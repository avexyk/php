<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

	$nombre=$_REQUEST['nombre'];
	$apellido=$_REQUEST['apellido'];
	$direccion=$_REQUEST['direccion'];
	$telefono=$_REQUEST['telefono'];
	$sexo=$_REQUEST['sexo'];

	echo "Nombre $nombre Apellido $apellido Dirección $direccion Teléfono $telefono Sexo $sexo";

	header("location: index.php?respuesta=datos recibidos&nombre={$nombre}");
}

 ?>