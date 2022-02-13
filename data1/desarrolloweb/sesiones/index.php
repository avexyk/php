<?php

session_start(['name'=>'AVEXYK']);

// Elimina todas las Sesiones
// session_destroy();

// Elimina un sesión específico
unset($_SESSION['login']);

// información de las Sesiones
if(session_status()==PHP_SESSION_DISABLED) {

}

if (isset($_SESSION['login'])) {
	echo 'Bienvenido '.$_SESSION['login'];
	$_SESSION['login']='Cliente';
} else {
	echo 'Sesión no iniciada';
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sesiones</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="login_session.php" method="post">
		Usuario: <input type="text" name="username"><br>
		Contraseña: <input type="password" name="password"><br>
		<input type="submit" name="enviar" value="Enviar">
	</form>

</body>
</html>