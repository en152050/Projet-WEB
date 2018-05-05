<?php
  session_start();
  	$c=$_SESSION['login'];
    $pseudo=$_GET['pseudo'];
    $email=$_GET['email'];


    ///Identifier la BDD
	$database = new PDO("mysql:host=localhost; dbname=projet_web; charset=UTF8", "root", "1234");
    //Connecter l'utilisateur à la BDD

    $sql = "DELETE FROM utilisateur WHERE pseudo_utilisateur =?";
    $result = $database->prepare($sql);
    $result->bindValue(1, $pseudo);
    $result->execute();

    $sql2 = "DELETE FROM reseau WHERE pseudo_utilisateur =? OR email_utilisateur=?";
    $result2 = $database->prepare($sql2);
    $result2->bindValue(1, $pseudo);
    $result2->bindValue(2, $email);
    $result2->execute();

    

    header("location:Mode Admin.php");

?>