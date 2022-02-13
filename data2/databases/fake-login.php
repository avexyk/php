<?php
	$user = null;
	$query = null;

	if (!empty($_POST)) {
		require_once 'config.php';

		$query = "SELECT * FROM users WHERE email=:email AND password=:password";
		$prepared = $pdo->prepare($query);
		$prepared->execute([
			'email' => $_POST['email'],
			'password' => md5($_POST['password'])
		]);

		$user = $prepared->fetch(PDO::FETCH_ASSOC);
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
		<h1>Fake Login</h1>
		<a href="index.php" title="">Home</a>

		<form action="fake-login.php" method="post" accept-charset="utf-8">
			<label for="email">Email</label>
			<input type="text" name="email" id="email">
			<br>
			<label for=password">Password</label>
			<input type="password" name="password" id="password">
			<br>
			<input type="submit" name="" value="Login">
		</form>

		<h2>Query</h2>
		<div>
			<?php
				print_r($query);
			?>
		</div>
		<h2>User Data</h2>
		<div>
			<?php
				print_r($user);
			?>
		</div>
	</div>
</body>
</html>