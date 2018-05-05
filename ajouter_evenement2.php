<?php
  session_start();

  	$c=$_SESSION['login'];
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$date = isset($_POST["date"])? $_POST["date"] : "";
	$heure = isset($_POST["heure"])? $_POST["heure"] : "";
	$lieu = isset($_POST["lieu"])? $_POST["lieu"] : "";
	
	$participation = isset($_POST["participation"])? $_POST["participation"] : "";
	$description = isset($_POST["description"])? $_POST["description"] : "";
	$img = isset($_POST["img"])? $_POST["img"] : "";


    ///Identifier la BDD
	$database = "projet_web";
    //Connecter l'utilisateur à la BDD
	$db_handle= mysqli_connect('localhost', 'root', '1234');
	$db_found = mysqli_select_db($db_handle,$database);
	if ($db_found) {
    $sql = "INSERT INTO evenement (nom_evenement, date_evenement, heure_evenement, lieu_evenement, participation_evenement , description_evenement,image ) VALUES ('$nom','$date','$heure','$lieu', '$participation','$description', '$img')";
    $result = mysqli_query($db_handle, $sql);




    header("location:Page d'accueil.php");
}
else {
    echo "Database Projet_web is not found.";
}

mysqli_close($db_handle);




?>