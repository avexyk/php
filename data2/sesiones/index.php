<?php
	// Inicializa una sesión
	// Las sesiones son únicas por cliente
	session_start();

	$_SESSION['count'] = 0;

	echo '<p>Sesion</p>';
?>