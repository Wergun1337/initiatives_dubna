<?php

$dbhost ="localhost";
$dbname ="initiatives";
$username ="root";
$password = "root";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);


// получение статьи по id
 function get_id($id){
 	global $db;
 	$singles = $db->query("SELECT * FROM initiatives_table WHERE id = $id");
 	foreach($singles as $single){
 		return $single;
 	}
 }



?>


