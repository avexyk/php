<?php
	// Son el mecanismo con el cual nosotros podemos almacenar información en el navegador del cliente
	// Es decir en lugar de usar la información para persistirla como en sesiones en nuestro servidor
	// Con las cookies están del lado del cliente
	// No almacenar contraseñas ni información de ese tipo porque como son cookies y estan del lado del cliente pueden ser accesadas por usuarios avanzados.
	
	setcookie('count', '1', time() + 60); 
	echo '<p>Cookies </p>';
?>