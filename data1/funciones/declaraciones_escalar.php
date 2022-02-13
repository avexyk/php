<?php
// Estricto, se quita lo estricto con la linea anterior fuera
declare(strict_types=1);

// Cuarsitivo :string especifica el valor de vuelta
function cuarsitiva(int $age):string {
  if ($age>=18) {
    return "Puedes ver la pelicula";
  } else {
    return "No puedes ver la pelicula";
  }
}

cuarsitiva(18);


 ?>
