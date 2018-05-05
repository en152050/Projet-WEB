<?php
  session_start();
  	$c=$_SESSION['login'];
    $email=$_GET['email'];
    $pseudo=$_GET['pseudo'];
	

    ///Identifier la BDD
	$database = new PDO("mysql:host=localhost; dbname=projet_web; cahset=UTF8", "root", "1234");
    //Connecter l'utilisateur à la BDD

    $sql = "DELETE FROM reseau WHERE pseudo_utilisateur = '$c' AND email_utilisateur=?";
    $result = $database->prepare($sql);
    $result->bindValue(1, $email, PDO::PARAM_INT);

    $result->execute();

    /*$sql2 = "DELETE FROM reseau WHERE email_utilisateur = '$c' AND pseudo_utilisateur=?";*/

    header("location:res.php");

