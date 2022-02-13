<?php
// Nunca se puede crear instancias de clases abstractas
// Las interfaces son similares a las clases abstractas, la diferencia es que todas
// las clases hijas que salgan de una base adbstracta tendran que heredar ese método
// y en las interfaces esto no es obligatorio
// Traits herencia mejorada se utiliza en clases que no tienen nada que ver con la jerarquía de herencia
// o son independientes
// Type hiting: Especifica el tipo de dato que se espera en un argumento. Array, interfaces, callback
declare(strict_types=1);

require_once('persona.php');
require_once('cliente.php');
require_once('empleado.php');
// Forma de incluir
// require('ruta'); Obligatorio para el funcionamiento del programa
// include(''); Si no encuentra salta un error
// require_once(''); Solo se require una vez el archivo
// include_once(''); Solo se reuire una vez el archivo

// Las variables de clase escriben sobre las variables de la clase original
// $jose = new Persona();
// $jose->nombre='Jose';
// $jose->apellido='Guzman';

// $carla = new Persona();
// $carla->nombre='Carla';

// echo $carla->nombre;
// echo $carla->ver();

// Llamar la variable de clase
// Persona::$color='Azul';
$laura = new Cliente();
$jose = new Empleado();

$laura->setNombre('Laura');
$jose->setNombre('Jose');

$laura->decir($jose);

// $laura->comer();
// $laura->correr();



// $laura->pagar();
// echo $laura->suma(12,34);

// $laura->setCorreo('correo@hotmail.com');
// echo $laura->getCorreo();

// $laura->setComun(5);
// echo $laura->getComun();

// $javier = new Empleado();
// $javier->cocinar();




 ?>
