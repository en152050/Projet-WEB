<?php
  session_start();

  	$c=$_SESSION['login'];
	$titre = isset($_POST["titre"])? $_POST["titre"] : "";
	$societe = isset($_POST["societe"])? $_POST["societe"] : "";
	$type = isset($_POST["type"])? $_POST["type"] : "";
	$experience = isset($_POST["experience"])? $_POST["experience"] : "";
	$capacite = isset($_POST["capacite"])? $_POST["capacite"] : "";
	$lieu = isset($_POST["lieu"])? $_POST["lieu"] : "";
	$remuneration = isset($_POST["remuneration"])? $_POST["remuneration"] : "";
	$description = isset($_POST["description"])? $_POST["description"] : "";
	$duree = isset($_POST["duree"])? $_POST["duree"] : "";

    ///Identifier la BDD
	$database = "projet_web";
    //Connecter l'utilisateur à la BDD
	$db_handle= mysqli_connect('localhost', 'root', '1234');
	$db_found = mysqli_select_db($db_handle,$database);
	if ($db_found) {
		$d = $_SESSION['titre'];
    $sql = "UPDATE emploi SET nom_emploi='$titre', description_emploi='$description', experience_emploi='$experience', capacites_emploi='$capacite', remuneration_emploi='$remuneration', lieu_emploi='$lieu', type_emploi='$type', societe_emploi='$societe', duree_emploi='$duree'  WHERE nom_emploi = '$d'";
    $result = mysqli_query($db_handle, $sql);

    




    header("location:Voir_mes_emplois.php");
}
else {
    echo "Database Projet_web is not found.";
}

mysqli_close($db_handle);



