<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Animales</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<a href="index.php?controller=animal&action=showById" title="">Nuevo</a>
	<table>
		<tr>
		<?php require_once 'core/const.php';
			foreach (DATA_ANIMAL as $key=>$value):
		?>
			<td><?php echo $value; ?></td>

		<?php endforeach; ?>
		<td>Genero</td>
		</tr>

		<?php foreach($this->model->getAll() as $animal): ?>
			<tr>
				<td><?php echo $animal->nombre ?></td>
				<td><?php echo $animal->especie ?></td>
				<td><?php echo $animal->raza ?></td>
				<td><?php echo $animal->color ?></td>
				<td><?php echo $animal->edad ?></td>
				<td><?php echo $animal->genero ?></td>
				<td><a href="index.php?controller=animal&action=showById&id=<?php echo $animal->id; ?>">Editar</a></td>
				<td><a onclick="javascript:return confirm('¿Estás seguro?');" href="index.php?controller=animal&action=quit&id=<?php echo $animal->id; ?>">Eliminar</a></td>
			</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>