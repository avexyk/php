<?php
	// Advertencia de que algo falla pero PHP no se detiene
	// include 'function.php';

	// Error fatal, PHP se detiene
	// require 'function.php';

	echo '<p>Text from function.php</p>';

	function sum($a, $b) {
		$result = $a + $b;
		echo '<p>Result: ' . $result . '</p>';
	}
?>