<?php 

require 'db.php';
//authorization

	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = md5(filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING));
	$sql = $pdo->prepare("SELECT login, name, pass FROM logins WHERE login = '$login' AND pass = '$pass'");
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);

	if(count($result) == 0) {
		$msg2 = 'Пользователь не найден';
		exit();
	} else {
		$msg2 = 'Вы успешно авторизовались';
		$login = '';
		$name = '';

		setcookie('user', $result[0]['name'], time() + 3600, "/");
		header('Location: /' . 'login/');
	}