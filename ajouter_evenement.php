<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<title> Ajouter Evenement </title>

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

/* style the submit button */
input[type=button] {
  background-color: grey;
  color: black;
  cursor: pointer;
  height:100px;
  width:100%;
}

input[type=button]:hover {
  background-color: #f2f2f2;
}

h2 {
  margin :0px;
  padding-bottom: 20px;
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
      <li> <a href="Page d'accueil.php"> <img src="accueil.png" alt="Accueil" width="40" height="40"></br>Accueil</a></li>
      <li><a href="res.php"> <img src="reseau.png" alt="Reseau" width="40" height="40"></br>Réseau</a></li>
      <li><a href="Emplois.php"> <img src="emploi.png" alt="Emplois" width="40" height="40"></br>Emplois</a></li>
      <li><a href="Notification.php"> <img src="notification.png" alt="Notification" width="40" height="40"> </br>Notifications</a>
        <li><a href="Messagerie.php"> <img src="messagerie.png" alt="Messagerie" width="40" height="40"></br>Messagerie</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Profil.php"><img src="monprofil.png" alt="Mon Profil" width="40" height="40"></br>Mon profil <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Profil.php">Voir mon profil</a></li>
            <li><a href="ledeces.php">Modifier mon profil</a></li>
            <li class="divider"></li>
            <li><a href="Media.php">Photos et vidéos</a></li>
            <li class="divider"></li>
            <li><a href="Mode Admin.php">Mode admin</a></li>
            <li><a href="Connexion.php">Déconnexion</a></li>
          </ul>
        </li>
      </ul>


    </div> <!-- fin du conteneur fluide -->

  </nav> <!-- fin du navbar -->


  

</div> <!-- fin du menu -->


<div class="container-fluid" style="padding-top: 80px;">
    <h1> Accueil </h1>
    
    <div class="row">
    <div class="col-lg-3" style="border-right:inset; height:1500px; "> 
      
    </div>


    <div class="col-lg-9" style="height:1500px; "> 
      <h2> Ajouter un evenement </h2>
      <form action="ajouter_evenement2.php" method="post"> 
        <table>
          <tr>
            <td> <input type="text" name="nom" placeholder="Nom de l'&eacute;v&eacute;nement" style= "margin:10px; width:300px; height:30px;" required> </td> 
          </tr>
          <tr>
            <td>  <input type="date" name="date" placeholder="Date" style= "margin:10px; width:300px; height:30px;" required> </td> 
          </tr>
          <tr>
              
          </tr>
          <tr>
            <td>  <input type="time" name="heure" placeholder="Heure" style= "margin:10px; width:300px; height:70px;" required> </td> 
          </tr>
          <tr>
            <td> <input type="text" name="lieu" placeholder="Lieu" style= "margin:10px; width:300px; height:30px;" required> </td> 
          </tr>
          <tr>
            <td> <input type="text" name="description" placeholder="Description" style= "margin:10px; width:300px; height:70px;" required> </td> 
          </tr>
          <tr>
            <td>  <select name="participation" style="margin:10px; width:300px; height:30px;" required>
                          <option value="participation ?" selected disabled>Participation ? </option> 
                          <option value="1">oui</option> 
                          <option value="0">non</option> 
                      </select>
  
              </td> 
          </tr>
          <tr>
            <td> <input type="text" name="img" placeholder="Chemin de l'image" style= "margin:10px; width:300px; height:30px;" required> </td> 
          </tr>


          <tr>
            <td> <input type="submit" style= "margin:10px; width:300px; height:50px;" value="Publier"> </td>
          </tr>

        
    </div>

  </div>
</div>





</body>
</html>