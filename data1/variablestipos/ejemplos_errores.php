<?php

// Parse error(Errores de sintaxis) (En compilación)
// echo 'Hola'
// echo 'Adios'

// Fatal error(Errores no detectados) (Detiene todo)
// noExisto();
// echo 'Llegue al final';

// Warning (No detiene la ejecución)
// echo 200/0;
// echo "Llegue al final";

// Notice (Avisos en tiempo de ejecución)
// $result;
// echo 'Resultado'.$result;
// echo 'LLegue al final';

// TigerError
trigger_error("Error al escribir", E_USER_ERROR);

 ?>
