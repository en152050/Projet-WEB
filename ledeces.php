  <?php
  session_start();
  ?>

  <!DOCTYPE html>
  <html>
  <head>

    <style>
    .caca  {
      background-image: url("aurore.jpg");
    /*  background-color: blue;
      margin:0;
      padding:0;
      -webkit-background-size: cover; /* pour anciens Chrome et Safari 
      background-size: cover; version standardisée */
    }
  </style>

  <title> Profil </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">

  /*.col-sm-3
  {

  float : left;
    width : 30%;
    margin : auto;
    padding : 0 50px;
    margin-top: 6px;
  }*/


  .lol 
  {

    background-color: blue;  
  }


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
              <li><a href="Connexion.html">Déconnexion</a></li>
            </ul>
          </li>
        </ul>


      </div> <!-- fin du conteneur fluide -->

    </nav> <!-- fin du navbar -->


    

  </div> <!-- fin du menu -->



  <div class=cacamou>
    <div class=caca>
      <div class="container-fluid" style="padding-top: 80px;">
        <h1 style="color: white"> <?php 
        $db = new PDO("mysql:host=localhost; dbname=projet_web; charset=UTF8", "root", "1234"); $a = $_SESSION['login']; echo $a;?> </h1>

        <?php $a = $_SESSION['login'];

        $sql="SELECT * FROM utilisateur WHERE pseudo_utilisateur = '$a'";

        $stmt = $db->query($sql);

  $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);//sans doublons de données.

  foreach($rows as $row): ?>



  
  <div class=lol>
  </div>

  <img src="<?php echo $row['photo_utilisateur'] ?>" class="img-thumbnail" alt="lol" width="304" height="170" style=" margin-left : 30px; height : 275px; width:auto;"> </br></br></br> 



  </div>



  </div>

    

    </div>

<?php endforeach; ?>


      
<!--      <h1>Modifier mon profil</h1>
  <div class="container-fluid">
    
<form action="modif.php">
    <input type="text" name="pseudo" placeholder="pseudo"></br>
        <input type="text" name="description" placeholder="description"></br>
        <input type="text" name="prenom" placeholder="prenom"></br>
         <input type="text" name="nom" placeholder="nom"></br>
         <input type="text" name="email" placeholder="email"></br>
        <input type="text" name="region" placeholder="region"></br>
         <input type="text" name="orga" placeholder="orga"></br>
<button>Enregistrer les modifications</button>
</form>
 -->

 <h2> Modifier mon profil </h2>
<form action="modif.php">
  <div class="form-group">
    <label for="pseudo">Pseudo : </label>
   <input type="text" class = "form-control" name="pseudo" placeholder="Pseudo" value ="<?php echo  $_SESSION['login']?> " id="pseudo" style= "margin:10px; width:300px; height:30px;" required>
  </div>
  <div class="form-group">
    <label for="description">Description : </label>
   <input type="text" class="form-control" name="description" placeholder="Description" value="<?php echo $row['description_utilisateur'] ?>" id="description" style= "margin:10px; width:650px; height:70px;" required>
  </div>
<div class="form-group">
    <label for="prenom">Prénom : </label>
     <input type="text" class="form-control" name="prenom" placeholder="Prénom" value="<?php echo $row['prenom_utilisateur'] ?>" id= "prenom" style= "margin:10px; width:300px; height:30px;" required>
  </div>
  <div class="form-group">
    <label for="nom">Nom : </label>
    <input type="text" name="nom" class="form-control" placeholder="Nom" value="<?php echo $row['nom_utilisateur'] ?> " id = "nom" style= "margin:10px; width:300px; height:30px;" required>
  </div>
  <div class="form-group">
    <label for="email">E-mail : </label>
    <input type="email" class="form-control" name="email" placeholder="Em@il" value="<?php echo $row['prenom_utilisateur'] ?> " id ="email" style= "margin:10px; width:300px; height:30px;" required> 
  </div>
  <div class="form-group">
    <label for="region">Région : </label>
    <input type="text" class="form-control" name="region" placeholder="Région" value="<?php echo $row['region_utilisateur'] ?> " id = "region" style= "margin:10px; width:300px; height:30px;" required>
  </div>

<?php

$a = $row['statut_utilisateur'];

if ($a == "Etudiant"):

?>
  <div class="form-group">
    <label for="statut">Statut : </label>
   <select name="statut" class="form-control" style="margin:10px; width:300px; height:30px;" id="statut" required>
                          <option value="choix"><?php echo $row['statut_utilisateur'] ?></option> 
                          <option>Employe</option> 
                      </select>

  </div>
    

<?php else: ?>

 <div class="form-group">
    <label for="statut">Statut : </label>
   <select name="statut" class="form-control" style="margin:10px; width:300px; height:30px;" id="statut" required>
                         <option value="choix"><?php echo $row['statut_utilisateur'] ?></option> 
                          <option>Etudiant</option> 
                         
                      </select>

  </div>

<?php
endif;

echo $a;
?>



  <div class="form-group">
    <label for="orga">Organisme : </label>
    <input type="text" class="form-control" name="orga" placeholder="0rganisme" value="<?php echo $row['organisme'] ?> " id = "orga" style= "margin:10px; width:300px; height:30px;" required>
  </div>

  <button type="submit" class="btn btn-default">Enregistrer les modifications </button>
</form>

<!-- 

      <form action="modif.php"> 
        <table>
          <tr>
            <td> <input type="text" class = "form-control" name="pseudo" placeholder="pseudo" value ="<?php echo  $_SESSION['login']?> " style= "margin:10px; width:300px; height:30px;" required> </td> 
          </tr>
          <tr>
            <td>  <input type="text" name="description" placeholder="description" value="<?php echo $row['description_utilisateur'] ?> " style= "margin:10px; width:650px; height:70px;" required> </td> 
          </tr>
          <tr>
              <td>   <select name="type" style="margin:10px; width:300px; height:30px;" required>
                          <option value="Choix" selected disabled>Contrat :</option> 
                          <option value="CDD">CDD</option> 
                          <option value="CDI">CDI</option>
                          <option value="ALternance">Alternance</option>
                          <option value="Stage">Stage</option>
                          <option value="Interim">Interim</option>
                      </select>
  
              </td> 
          </tr> -->
         <!-- <tr>
            <td>  <input type="text" name="prenom" placeholder="Prénom" value="<?php echo $row['prenom_utilisateur'] ?>" style= "margin:10px; width:300px; height:30px;" required> </td> 
          </tr>
          <tr>
            <td> <input type="text" name="nom" placeholder="Nom" value="<?php echo $row['nom_utilisateur'] ?> " style= "margin:10px; width:300px; height:30px;" required> </td> 
          </tr>
          <tr>
            <td> <input type="text" name="email" placeholder="Em@il" value="<?php echo $row['prenom_utilisateur'] ?> " style= "margin:10px; width:300px; height:30px;" required> </td> 
          </tr>
          <tr>
            <td>  <input type="text" name="region" placeholder="Région" value="<?php echo $row['region_utilisateur'] ?> " style= "margin:10px; width:300px; height:30px;" required> </td> 
          </tr>
         
          <tr>
              <td>   <select name="type" style="margin:10px; width:300px; height:30px;" required>
                          <option value="Choix" selected disabled>Contrat :</option>
                          <option value="CDD">Employe</option> 
                          <option value="CDI">Etudiant</option>
                      </select>
  
              </td> 
          </tr>

            <tr>
            <td>  <input type="text" name="orga" placeholder="0rganisme" value="<?php echo $row['organisme'] ?> " style= "margin:10px; width:300px; height:30px;" required> </td> 
          </tr>
          <tr>
            <td> <button>Enregistrer les modifications</button> </td>
          </tr>
 -->
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






</body>
</html>


