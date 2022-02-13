<?php

$frutas = array('uno'=>'Sandía', 'dos'=>'Pera');
$colors = array('Rojo', 'Morado', 'Verde');

$batleShip = array(
  'A' => array('Mar','Barco','Mar','Mar'),
  'B' => array('Mar','Mar','Mar','Mar'),
  'C' => array('Mar','Mar','Barco','Mar'),
  'D' => array('Mar','Mar','Mar','Mar')
);

for ($i=0; $i < sizeof($colors); $i++) {
  echo "Indice: $i Valor:{$colors[$i]} \n";
}

foreach ($frutas as $key => $value) {
  echo "$key:$value \n";
}

foreach ($batleShip as $key => $value) {
  for ($i=0; $i < sizeof($value) ; $i++) {
    if ($batleShip[$key][$i]=='Barco') {
      echo "Coordenadas: Fila $key Columna $i destruir \n";
    } else {
      echo "Coordenadas: Fila $key Columna $i \n";
    }
  }
}

 ?>
