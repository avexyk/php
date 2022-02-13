<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form method="post" action="form.php">
		<table>
			<?php
				$array=array('nombre'=>'Nombre','apellido'=>'Apellido', 'direccion'=>'Dirección', 'telefono'=>'Teléfono');
				foreach ($array as $key=>$value):
			 ?>

				<tr>
					<td><?php echo $value ?></td>
					<td>
						<input type="text" name=<?php echo $key?>>
					</td>
				</tr>

			<?php endforeach; ?>

			<tr>
				<td>Sexo</td>
				<td>
					<input type="radio" name="sexo" value="Hombre"> Mujer
					<input type="radio" name="sexo" value="Mujer"> Hombre
				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="submit" value="Enviar">
				</td>
			</tr>

		</table>
	</form>
	<h1><?php echo "{$_GET['respuesta']} {$_GET['nombre']}" ?></h1>
</body>
</html>