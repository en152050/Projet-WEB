<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '1234');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



$pseudo = $_GET['pseudo'];
$description = $_GET['description'];
$prenom = $_GET['prenom'];
$nom = $_GET['nom'];
$email = $_GET['email'];
$region = $_GET['region'];
$statut = $_GET['statut'];
$orga = $_GET['orga'];


$req = $bdd->prepare('UPDATE utilisateur SET description_utilisateur = :description, prenom_utilisateur = :prenom, nom_utilisateur = :nom, email_utilisateur = :email, region_utilisateur = :region, statut_utilisateur = :statut, organisme = :orga WHERE pseudo_utilisateur = :pseudo');
$req->execute(array(
	'description' => $description,
	'prenom' => $prenom,
	'nom' => $nom,
	'email' => $email,
	'region' => $region,
	'statut' => $statut,
	'orga' => $orga,
	'pseudo' => $pseudo
	));



header("location:Profil.php");


?>
