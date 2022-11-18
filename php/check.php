<?php
	$fio = filter_var(trim($_POST['fio']),
		FILTER_SANITIZE_STRING);
	 $date = filter_var(trim($_POST['date']),
		FILTER_SANITIZE_STRING);
	 $tel = filter_var(trim($_POST['tel']),
		FILTER_SANITIZE_STRING);
	 $adres = filter_var(trim($_POST['adres']),
		FILTER_SANITIZE_STRING);
	 $mail = filter_var(trim($_POST['mail']),
		FILTER_SANITIZE_STRING);
	 $pass = filter_var(trim($_POST['pass']),
		FILTER_SANITIZE_STRING);
	 if(mb_strlen($mail)>99 || mb_strlen($mail)<5 ){
	 	echo"Недопустимая длина логина";
	 	exit();
	 }
	 else if(mb_strlen($pass)>30 || mb_strlen($pass)<4 ){
	 	echo"Недопустимая длина пароля(от 4 до 30 символов)";
	 	exit();
	 }

	 $pass = md5($pass."corsupietgram517");

	 $mysql = new mysqli('localhost', 'root', 'root', 'register');
	 $mysql->query("INSERT INTO `users` (`name`, `date`, `tel_number`, `adres`, `email`, `password`)
	 VALUES('$fio','$date','$tel','$adres','$mail','$pass')");

	 $mysql->close();

	 header('Location: /main.php') 
?>