<?php
	$title = filter_var(trim($_POST['tittle']),
		FILTER_SANITIZE_STRING);
	 $text = filter_var(trim($_POST['text']),
	 	FILTER_SANITIZE_STRING);


	 $mysql = new mysqli('localhost', 'root', 'root', 'reviews');
	 $mysql->query("INSERT INTO `new_initiative` (`title`, `text`)
	 VALUES('$title','$text')");

	 $mysql->close();

	 header('Location: /initiativesent.php') 
?>