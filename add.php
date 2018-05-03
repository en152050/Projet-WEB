<?php 



$id = isset($_POST["id"])? $_POST["id"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";


/*$id = $_GET['id'];
$nom = $_GET['nom'];
$email = $_GET['email'];
*/


$db = new PDO("mysql:host=localhost; dbname=dwm; charset=UTF8", "root", "1234");


$sql = "INSERT INTO users (id, nom, email) VALUES('$id', '$nom' , '$email')"; 

$stmt = $db-> prepare($sql);
$stmt->bindValue(1, $nom, PDO::PARAM_STR);
$stmt->bindValue(2, $email, PDO::PARAM_STR);

$stmt -> execute();



$db -> exec($sql);

header("location:ledeces.php");




 ?>