<?php
	$name = filter_var(trim($_POST['name']),
		FILTER_SANITIZE_STRING);
	 $mail = filter_var(trim($_POST['mail']),
	 	FILTER_SANITIZE_STRING);
	 $tel = filter_var(trim($_POST['tel']),
		FILTER_SANITIZE_STRING);
	 $text = filter_var(trim($_POST['text']),
	 	FILTER_SANITIZE_STRING);



	 $mysql = new mysqli('localhost', 'root', 'root', 'reviews');
	 $mysql->query("INSERT INTO `questions` (`name`, `mail`,`tel`, `text`)
	 VALUES('$name','$mail','$tel','$text')");

	 $mysql->close();

	 header('Location: /contacts_send.php') 
?>