<?php

$user='avexyk';
$pass='12345';

session_start();

if ($_POST['username']==$user && $_POST['password']==$pass) {
	$_SESSION['login']='Administrador';
	header('Location: index.php');
} else {
	echo 'Usuario o contraseña incorrectos';
}

 ?>