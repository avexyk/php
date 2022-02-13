<?php
require_once 'config.php';

$queryResult = $pdo->query("SELECT * FROM users");

// while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
// 	var_dump($row);
// 	echo '<br><br>';
// }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Database con PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<h1>List Users</h1>
		<a href="index.php" title="">Home</a>

		<table class="table">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php

			while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
				echo '<tr>';
				echo '<td>' . $row['name'] . '</td>';
				echo '<td>' . $row['email'] . '</td>';
				echo '<td><a href="update.php?id=' . $row['id'] . '" title="">Edit</a></td>';
				echo '<td><a href="delete.php?id=' . $row['id'] . '" title="">Delete</a></td>';
				echo '</tr>';
			}

			?>
		</table>

	</div>
</body>
</html>