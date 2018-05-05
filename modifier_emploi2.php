<?php
  session_start();

  	$c=$_SESSION['login'];
  	$z=$_SESSION['nom_emploi'];

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
    	$conn = mysqli_connect('localhost', 'root', '1234', $database);
    	if (!$conn) {
    	    die("Connection failed: " . mysqli_connect_error());
    	}
        //Connecter l'utilisateur à la BDD
	
		
    	$sql = "UPDATE emploi SET nom_emploi='$titre', description_emploi='$description', experience_emploi='$experience', capacites_emploi='$capacite', remuneration_emploi='$remuneration', lieu_emploi='$lieu', type_emploi='$type', societe_emploi='$societe', duree_emploi='$duree'  WHERE nom_emploi = '$z'";
    	
    	$sql2 = "UPDATE annonce SET nom_emploi='$titre' WHERE pseudo_utilisateur= '$c' AND nom_emploi = '$z'";
    	
    

    	

    	if (mysqli_query($conn, $sql2)) {
    	    echo "Record updated successfully";
    	} else {
    	    echo "Error updating record: " . mysqli_error($conn);
    	}

    	if (mysqli_query($conn, $sql)) {
    	    echo "Record updated successfully";
    	} else {
    	    echo "Error updating record: " . mysqli_error($conn);
    	}

    	header("location:Voir_mes_emplois.php");

    	mysqli_close($conn);




