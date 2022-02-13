<?php

// Función de reemplazo String(sensible)
$search = ' ';
$replace = ':';
$text = '91 75 1A EC 9A C7';
echo str_replace($search, $replace, $text,$count);
echo $count;

// Especificador de formato (Agregar formato)
$arg1=1994;
$arg2='PHP';
$text2='En %d fue creado %s';
// Se puede cambiar la ubicación
// $text2='En %2$d fue creado %1$s';

echo sprintf($text2, $arg1, $arg2);

 ?>
