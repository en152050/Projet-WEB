<?php
  session_start();
  	$c=$_SESSION['login'];
    $nom_emploi=$_GET['nom_emploi'];
    


    ///Identifier la BDD
	$database = new PDO("mysql:host=localhost; dbname=projet_web; cahset=UTF8", "root", "1234");
    //Connecter l'utilisateur à la BDD

    $sql = "DELETE FROM annonce WHERE pseudo_utilisateur = '$c' AND nom_emploi=?";
    $result = $database->prepare($sql);
    $result->bindValue(1, $nom_emploi);
    $result->execute();

    $sql2 = "DELETE FROM emploi WHERE nom_emploi=?";
    $result2 = $database->prepare($sql2);
    $result2->bindValue(1, $nom_emploi);
    $result2->execute();

    /*$sql2 = "DELETE FROM reseau WHERE email_utilisateur = '$c' AND pseudo_utilisateur=?";*/

    header("location:Voir_mes_emplois.php");

?>