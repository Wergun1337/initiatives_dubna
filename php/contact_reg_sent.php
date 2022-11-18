<?php
	 $text = filter_var(trim($_POST['text']),
	 	FILTER_SANITIZE_STRING);



	 $mysql = new mysqli('localhost', 'root', 'root', 'reviews');
	 $mysql->query("INSERT INTO `questions` ( `text`)
	 VALUES('$text')");

	 $mysql->close();

	 header('Location: /contacts_send.php') 
?>