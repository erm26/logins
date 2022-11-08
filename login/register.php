<?php 

require 'db.php';

//registration

	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$pass = md5(filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING));
	$passw = md5(filter_var(trim($_POST['passw']), FILTER_SANITIZE_STRING));
	
	if(strlen($login) < 3 || strlen($login) > 100) {
		$msg = 'Недопустимая длина логина';
	} elseif(strlen($name) < 3 || strlen($name) > 100) {
		$msg = 'Недопустимая длина имени';
	} elseif($pass !== $passw) {
		$msg = 'Пароли не совпадают';
	} else {
		$sql = $pdo->prepare('INSERT INTO logins (login, name, pass) VALUES (:login, :name, :pass)');
		$sql->execute(['login' => $login, 'name' => $name, 'pass' => $pass]);

		$msg = 'Вы успешно зарегистрировались';
		$login = '';
		$name = '';

		header('Location: /' . 'login/');
	}



