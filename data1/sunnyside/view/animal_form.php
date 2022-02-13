<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Animales</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action='index.php?controller=animal&action=save' method='post'>
		<table>
			<input type="hidden" name="id" value="<?php echo $animal->id; ?>">
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $animal->nombre; ?>" placeholder=""></td>
			</tr>

			<tr>
				<td>Especie</td>
				<td><input type="text" name="especie" value="<?php echo $animal->especie; ?>" placeholder=""></td>
			</tr>

			<tr>
				<td>Raza</td>
				<td><input type="text" name="raza" value="<?php echo $animal->raza; ?>" placeholder=""></td>
			</tr>

			<tr>
				<td>Genero</td>
				<td>
					<select name="genero">
						<option <?php echo $animal->nombre=='Macho'?'Selected':''; ?> value="Macho">Macho</option>
						<option <?php echo $animal->nombre=='Hembra'?'Selected':''; ?> value="Hembra">Hembra</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Color</td>
				<td><input type="text" name="color" value="<?php echo $animal->color; ?>" placeholder=""></td>
			</tr>

			<tr>
				<td>Edad</td>
				<td><input type="text" name="edad" value="<?php echo $animal->edad; ?>" placeholder=""></td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="enviar" value="Enviar">
				</td>
			</tr>

		</table>
	</form>

</body>
</html>