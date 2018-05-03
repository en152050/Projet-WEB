<?php

$id = isset($_POST["id"])? $_POST["id"] : "";

$db = new PDO("mysql:host=localhost; dbname=dwm; charset=UTF8", "root", "1234");


$sql = "DELETE FROM users (id, nom, email) WHERE id=$id";


$db -> exec($sql);

header("location:ledeces.php");

?>
