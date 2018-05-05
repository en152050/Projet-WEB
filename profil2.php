<!DOCTYPE html>
<html>
<head>

  <title> Profil </title>
<style>
body  {
    background-image: url("emmanuel.jpg");
    background-color: blue;
    margin:0;
  padding:0;

  -webkit-background-size: cover; /* pour anciens Chrome et Safari */
  background-size: cover; /* version standardisée */
}
</style>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">

  .menu
  {
   padding: 0;
   margin: 0;
   list-style-type: none;
   position : fixed;
   top: 0;
   width: 100%;
   line-height: 20px;
   text-align : center;
    z-index: 1;


 }

 /* Two-column layout */
 .col {
   float: left;
   width: 30%;
   margin: auto;
   padding: 0 50px;
   margin-top: 6px;
 }


 .navbar-default {
   /* Couleur de fond de la barre de navigation */
   background-color: #f2f2f2;
   border-color: black;
   
 }

 /* Couleur des titres affichés dans la barre */
 .navbar-default .navbar-brand {
   color: green;
   margin : 0;
 }

 /* Couleur utilisée pour les liens */
 .navbar-default .navbar-nav > li > a {
   color: black;
 }


 /* Couleur utilisée pour le lien actif (celui qui est affiché sur la page) */
 .navbar-default .navbar-nav > .active > a, 
 .navbar-default .navbar-nav > .active > a:hover, 
 .navbar-default .navbar-nav > .active > a:focus {
   color: white;
   background-color: white;
 }


/* lien pour modifier tous les trucs de la barre
https://www.journaldunet.fr/web-tech/developpement/1202675-quelles-modifications-faire-dans-les-css-pour-changer-la-couleur-de-la-navbar-barre-de-navigation-dans-bootstrap/
*/

</style>
</head>



<body>

  <div class = "menu">

   <nav class="navbar navbar-default">

    <div class="container-fluid">


      <div class="navbar-header">
       <a class=navbar-brand rel=home href=# ><img src=logo_ece.png alt="logo" width="180" height="50"></a>
     </div>

     <div class="nav navbar-nav" style="padding-top: 33px">
       <form action="/action_page.php">
        <input type="text" placeholder="Chercher.." name="chercher">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li> <a href="Page d'accueil.html"> <img src="accueil.png" alt="Accueil" width="40" height="40"></br>Accueil</a></li>
      <li><a href="res.php"> <img src="reseau.png" alt="Reseau" width="40" height="40"></br>Réseau</a></li>
      <li><a href="Emplois.html"> <img src="emploi.png" alt="Emplois" width="40" height="40"></br>Emplois</a></li>
      <li><a href="Notification.html"> <img src="notification.png" alt="Notification" width="40" height="40"> </br>Notifications</a>
        <li><a href="Messagerie.html"> <img src="messagerie.png" alt="Messagerie" width="40" height="40"></br>Messagerie</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Profil.html"><img src="monprofil.png" alt="Mon Profil" width="40" height="40"></br>Mon profil <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Profil.html">Voir mon profil</a></li>
            <li><a href="#">Modifier mon profil</a></li>
            <li class="divider"></li>
            <li><a href="Media.html">Photos et vidéos</a></li>
            <li class="divider"></li>
            <li><a href="Mode Admin.html">Mode admin</a></li>
            <li><a href="#">Déconnexion</a></li>
          </ul>
        </li>
      </ul>


    </div> <!-- fin du conteneur fluide -->

  </nav> <!-- fin du navbar -->


  

</div> <!-- fin du menu -->


<div class="container-fluid" style="padding-top: 80px;">
    <h1> Profil </h1>

<div class="container-fluid">    
  <img src="emmanuel.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
</div>

<?php

$db = new PDO("mysql:host=localhost; dbname=projet_web; charset=UTF8", "root", "1234");

$sql="SELECT * FROM reseau WHERE pseudo_utilisateur = 'emmanuel.nguyen'";

$stmt = $db->query($sql);

$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);//sans doublons de données.


?>

  <table border="1" width ="100%" cellpadding="4">
<tr><th>contact</th><th>relation</th></tr>

<?php foreach($rows as $row): ?>

<tr>
  
  <td><?php echo $row['pseudo_contact'] ?></td>
  <td><?php echo $row['relation_reseau'] ?></td>
</tr>

<?php endforeach; ?>
</table>        
</div>




</body>
</html>