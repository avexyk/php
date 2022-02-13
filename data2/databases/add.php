<?php
require_once 'config.php';
$result = false;

	// var_dump($_POST);
	if (!empty($_POST)) {
		$name = $_POST['name'];
		$email = $_POST['email'];

		// Never use md5 to store password!!
		$password = md5($_POST['password']);

		// Validate
		$sql = "INSERT INTO users(name, email, password) VALUES (:name, :email, :password)";
		$query = $pdo->prepare($sql);

		$result = $query->execute([
			'name' => $name,
			'email' => $email,
			'password' => $password
		]);
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
		<h1>Add User</h1>
		<a href="index.php" title="">Home</a>
		<?php
			if ($result == true) {
				echo '<div class="alert alert-success">Success!!</div>';
			}
		?>
		<form action="add.php" method="post" accept-charset="utf-8">
			<label for="name">Name</label>
			<input type="text" name="name" id="name">
			<br>
			<label for="email">Email</label>
			<input type="text" name="email" id="email">
			<br>
			<label for=password">Password</label>
			<input type="password" name="password" id="password">
			<br>
			<input type="submit" name="" value="Save">
		</form>
	</div>
</body>
</html>