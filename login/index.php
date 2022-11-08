

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php if($_COOKIE['user'] == ''): ?>
		<div class="row">
			<div class="col">
				<h1>Регистрация</h1>
				<form action="register.php" method="post">
					<input type="text" name="login" value=""><br><br>
					<input type="text" name="name" value=""><br><br>
					<input type="password" name="pass"><br><br>
					<input type="password" name="passw"><br><br>
					<input type="submit" name="reg" class="btn btn-success" value="Зарегистрироваться"><br>
					<?php echo $msg; ?>
				</form>
			</div>
			<div class="col">
				<h1>Авторизация</h1>
				<form action="auth.php" method="post">
					<input type="text" name="login"><br><br>					
					<input type="password" name="pass"><br><br>
					<input type="submit" name="enter" class="btn btn-success" value="Авторизоваться"><br>
					<?php if(!$msg){
						$msg = '';
					} ?>
				</form>
			</div>
		</div>
		<?php else: ?>
			<p>Привет <?php echo $_COOKIE['user']; ?></p>
			<p>Чтобы выйти нажмите <a href="exit.php">сюда</a></p>
	<?php endif; ?>
	</div>
</body>
</html>