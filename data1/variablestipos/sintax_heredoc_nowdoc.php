<?php
// Heredoc: Grandes cantidades de caracteres
// * Se puede utilizar dobles o simples comilla
// * Se le puede asignar todo el contenido de heredoc a una variable
$animal='Pato';

echo <<<FRASE
PHP es una de los \n lenguajes de la web
$animal
FRASE;

// Nowdoc: Hace lo mismo que las comillas simples
// * No acepta variables ni escapes
$arbol=<<<'FRASE'
"Los arboles son importantes \n para el mundo"
'Planta'
FRASE;

echo $arbol;

 ?>
