<?php 
	// Las funciones anónimas son funciones que no tienen un nombre específico. Se utilizan como parámetro de otras funciones a las cuales queremos modificar su comportamiento. Se asignan también a una variable específica.
	
	$var2 = 1;
	
	$var = function () use ($var2)
	{
		echo 'This is a closure';
		echo '<br>Value: ' . $var2;
	};

	$var();
?>