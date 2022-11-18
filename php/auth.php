<?php 
	 $mail = filter_var(trim($_POST['mail']),
		FILTER_SANITIZE_STRING);
	 $pass = filter_var(trim($_POST['pass']),
		FILTER_SANITIZE_STRING);

	 $pass = md5($pass."corsupietgram517");

	 $mysql = new mysqli('localhost', 'root', 'root', 'register');
	 
	 $result = $mysql->query("SELECT * FROM `users` WHERE  `email` = '$mail' AND `password` = '$pass'");

	 $user = $result->fetch_assoc();
	


	setcookie('user', $user['name'], time() + 3600, "/");
	



	 $mysql->close();

	 header('Location: /main.php') 
 ?>