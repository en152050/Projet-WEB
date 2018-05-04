<?php
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
    $sql = "INSERT INTO emploi (nom_emploi, description_emploi, experience_emploi, capacites_emploi, remuneration_emploi, lieu_emploi, type_emploi, societe_emploi, duree_emploi) VALUES ('$titre','$description','$experience','$capacite','$remuneration','$lieu', '$type', '$societe','$duree')";
    $result = mysqli_query($db_handle, $sql);
    header("location:Emplois.html");
}
else {
    echo "Database Projet_web is not found.";
}

mysqli_close($db_handle);




?>