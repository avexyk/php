<?php
include_once 'config.php';
$result = false;

if (!empty($_POST)) {
	$id = $_POST['id'];
	$newName = $_POST['name'];
	$newEmail = $_POST['email'];

	$sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
	$query = $pdo->prepare($sql);

	$result = $query->execute([
		'id' => $id,
		'name' => $newName,
		'email' => $newEmail
	]);

	$nameValue = $newName;
	$emailValue = $newEmail;

} else {
	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE id=:id";
	$query = $pdo->prepare($sql);

	$query->execute([
		'id' => $id
	]);

	$row = $query->fetch(PDO::FETCH_ASSOC);
	$nameValue = $row['name'];
	$emailValue = $row['email'];
}

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
		<h1>Update User</h1>
		<a href="list.php" title="">Back</a>
		<?php
			if ($result == true) {
				echo '<div class="alert alert-success">Success!!</div>';
			}
		?>
		<form action="update.php" method="post" accept-charset="utf-8">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="<?php echo $nameValue; ?>">
			<br>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="<?php echo $emailValue; ?>">
			<br>
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<input type="submit" name="" value="Update">
		</form>
	</div>
</body>
</html>