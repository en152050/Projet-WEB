
 <?php
  session_start();
  ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<!--

    <h1>Users</h1>
    <form action="add.php">
         <input type="text" name="nom" placeholder="nom">
        <input type="text" name="possesseur" placeholder="possesseur">
        <input type="text" name="console" placeholder="console">
         <input type="text" name="prix" placeholder="prix">
        <input type="text" name="nbre_joueurs_max" placeholder="nbre_joueurs_max">
         <input type="text" name="commentaires" placeholder="commentaires">
        <button>Envoyer</button>
    </form> -->
<!---
<form action="modif.php">
    <input type="text" name="nom_jeu" placeholder="nom du jeu">
        <input type="text" name="nvprix" placeholder="nvprix">
        <input type="text" name="nv_nb_joueurs" placeholder="nv_nb_joueurs">
<button>enregistrer</button>
</form>-->


<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '1234');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$a = $_SESSION['login'];
$reponse = $bdd->query("SELECT * FROM utilisateur WHERE pseudo_utilisateur='$a'");

while ($donnees = $reponse->fetch())
{
    echo $donnees['description_utilisateur'] . '<br />';
}

$reponse->closeCursor();

?>


<form action="modif.php">
    <input type="text" name="pseudo" placeholder="pseudo">
    <input type="text" name="descri" placeholder="description">
   
<button>enregistrer</button>
</form>

</body>
</html>


