<?php

// Autenticacion basada en formularios: En forms
// Autenticacion en http: En el servidor Web
// Los cookies almamcenan información del lado del cliente // 4093 caracteres y 20 cokkies por dominio
// un navegador solo puede almacenar 300 cookies entre todos los sitios.
// Las sesiones alamacenan la información del lado del servidor // ID único de usario y se envia a las cookies
// En las cookies es inseguro almacenar cuentas(usuario, contraseña), se pueden cifrar o almacenar en el
// servidor y solo utilizar un identificador

$loginSuccessful=false;

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
	$username=$_SERVER['PHP_AUTH_USER'];
	$password=$_SERVER['PHP_AUTH_PW'];

	if ($username=='avexyk' && $password='12345') {
		$loginSuccessful=true;
	}
}

if (!$loginSuccessful) {
	// Si sucede algún error en la autenticacion se muestra un error
	header('WWW-Authenticate:Basic');
	header('HTTP/1.0 401 Unauthorized');
	echo 'Error';
} else {
	echo 'Bienvenido';
}

 ?>