<?php
  session_start();
$email = isset($_POST["email"])? $_POST["email"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$password = isset($_POST["password"])? $_POST["password"] : "";




    ///Identifier la BDD
$database = "projet_web";
    //Connecter l'utilisateur à la BDD
$db_handle= mysqli_connect('localhost', 'root', '1234');
$db_found = mysqli_select_db($db_handle,$database);
if ($db_found) {
    $sql = "INSERT INTO utilisateur (pseudo_utilisateur, mot_de_passe_utilisateur, email_utilisateur, nom_utilisateur, prenom_utilisateur, photo_utilisateur, administrateur_utilisateur, statut_utilisateur, region_utilisateur, cv_utilisateur, description_utilisateur) VALUES ('$pseudo','$password','$email','$nom','$prenom','0', 0, '0','0','0', '0')";
    $result = mysqli_query($db_handle, $sql);
}
else {
    echo "Database Projet_web is not found.";
}

mysqli_close($db_handle);


?>