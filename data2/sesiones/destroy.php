<?php
	session_start();

	// Destruir la sesión de forma explícita como si se realizará un logout
	// unset($_SESSION['count']);

	session_destroy();
?>