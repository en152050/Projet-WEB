
 <?php
  session_start();
  ?>

<?php
/*
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '1234');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



$nvprix = $_GET['nvprix'];
$nv_nb_joueurs = $_GET['nv_nb_joueurs'];
$nom_jeu = $_GET['nom_jeu'];

$req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
$req->execute(array(
	'nvprix' => $nvprix,
	'nv_nb_joueurs' => $nv_nb_joueurs,
	'nom_jeu' => $nom_jeu
	));

echo 'Le jeu a bien été ajouté !';*/



try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '1234');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$a = $_SESSION['login'];
echo $a;


$descri = $_GET['descri'];
$pseudo = $_GET['pseudo'];

$req = $bdd->prepare('UPDATE utilisateur SET organisme = :descri, WHERE pseudo_utilisateur = :pseudo');
$req->execute(array(
	'descri' => $descri,
	'pseudo' => $pseudo
	));

echo 'Le jeu a bien été ajouté !';





$a = $_SESSION['login'];
$reponse = $bdd->query("SELECT * FROM utilisateur WHERE pseudo_utilisateur='$a'");

while ($donnees = $reponse->fetch())
{
    echo $donnees['description_utilisateur'] . '<br />';
}

$reponse->closeCursor();


?>
