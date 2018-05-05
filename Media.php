<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>



	<title> Profil </title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-gallery.css">
  <link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="bootstrap-gallery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap-gallery.css">

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
  <h1 style="margin-bottom: 0px; "> Vos photos </h1>
  <div class="container">  
    <div class="row">


    </div>
  </div>





        <!-- <div class="col-xs-3">
            <a href="images/image2.jpg" class="thumbnail">
                <img src="images/image2-thumb.jpg" alt="Image 2" />
            </a>
        </div>
        
        <div class="col-xs-3">
            <a href="images/image3.jpg" class="thumbnail">
                <img src="images/image3-thumb.jpg" alt="Image 3" />
            </a>
        </div>
        
        <div class="col-xs-3">
            <a href="images/image4.jpg" class="thumbnail">
                <img src="images/image4-thumb.jpg" alt="Image 4" />
            </a> 
          </div>-->
        </div>
      </div>


      <div class=cacamou>
        <div class=caca>
          <div class="container-fluid" style="padding-top: 0px; margin-top: 40px;">
            <h1 style="color: white"> <?php 
            $db = new PDO("mysql:host=localhost; dbname=projet_web; charset=UTF8", "root", "1234"); $a = $_SESSION['login']; echo $a;?> </h1>

            <?php $a = $_SESSION['login'];

            $sql="SELECT * FROM utilisateur WHERE pseudo_utilisateur = '$a'";

            $stmt = $db->query($sql);

  $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);//sans doublons de données.

  ?>
  <div class=lol>
  </div>
</div>



</div>


<div class="container-fluid">

  <div class="row">

   <div class="col-sm-3" style="background-color: white ; color: #08088A; font-family: Verdana; font-size : 18px; position:relative;">
    <h1 style="color:white;"> -</h1> </br>
    <center> <p style="margin-bottom: 20px;">
      <form action="recherche.php">
        <input type="text" placeholder="Recherche" name="nom">  
        <button type="submit"><i class="fa fa-search" ></i></button></center>
      </form>
      <button type="button" class="btn" style=" font-size: 23px; margin-top: 20px;">Rechercher dans mes photos</button></p>
    </div>



    <div class="bouton" style="background-color: #E0F2F7;">
      <button type="button" class="btn btn-default" style="margin-top : 25px; margin-left: 15px; margin-bottom: 40px;">Publier une photo/vidéo</button>

    </div>

    <div class="col-sm-9" style="background-color: #F2F2F2">


      <?php $db = new PDO("mysql:host=localhost; dbname=projet_web; charset=UTF8", "root", "1234"); $a = $_SESSION['login'];?> </h1>

      <?php 

      $sql="SELECT * FROM media WHERE pseudo_util = '$a'";

      $stmt = $db->query($sql);

  $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);//sans doublons de données.

  foreach($rows as $row): ?>

<div class="thumbnail" style="margin: 14px;">


    <img src="<?php echo $row['nom_media'] ?>" class="img-thumbnail" alt="lol" width="304" height="170" style="  margin: 30px; height : 230px; width:auto;"></br>
<p>
    
    <h3><?php echo $row['nom_media'];?></h3></br>




<blockquote class="blockquote">
  <p class="mb-0"><?php
    echo $row['lieu_media'];?></br><?php
    
  echo "Le "; echo $row['date_media'];?></br><?php
    echo "à "; echo $row['heure_media'];?></br></p>
  <footer class="blockquote-footer"><img src="<?php echo $row['humeur_media'];?>.png" style="margin-left: 3px; height : 25px; width:auto;"></footer>
</blockquote>

</div>
  <?php endforeach; ?>





</div>

</div>


     <!-- <div class="col-sm-1" style="background-color:pink;">   
     </div>-->
   </div>
 </div>


</body>
</html>





