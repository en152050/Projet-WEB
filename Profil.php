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


  <div class="container-fluid">
    
    <div class="row">

     <div class="col-sm-3" style="background-color: #F2F2F2 ; color: #08088A; font-family: Verdana; font-size : 18px;">
            <h1 style="color:#F2F2F2;"> Infos</h1> </br>
             <p style="font-style: italic">

               <p style="font-size: 25px; text-decoration: overline; text-decoration: underline"><?php echo $row['prenom_utilisateur'];echo " "; echo $row['nom_utilisateur'];?></></br></br></p>


              <img src=cravate.png alt="logo" width="auto" height="28"><?php echo $row['statut_utilisateur'];echo " à "; echo $row['organisme'];?></br></br>
              <img src=carte.png alt="logo" width="auto" height="28"><?php echo $row['region_utilisateur'];?></br></br>
              <img src=telephone.png alt="logo" width="auto" height="28"><?php echo $row['email_utilisateur'];?></br></br>
             <button type="button" class="btn" style="margin-left:40%; margin-top : 10px; font-size: 23px">Photos</button></p> 
             </br><center><div class="cv" style="margin-bottom: 30px; "><a href="<?php echo $row['cv_utilisateur'];?>" > Télécharger le CV </a></div> </center>
      </div>


  <button type="button" class="btn btn-default" style="margin-top : 25px; margin-left: 15px;">Publier une photo/vidéo</button>
      
      <div class="col-sm-9">
       <h1 style="margin-top: 40px;">A propos de moi</h1>   
        <p style="font-size: 25px; font-style :italic"><?php echo $row['description_utilisateur'];?></p>
      </div>


     <!-- <div class="col-sm-1" style="background-color:pink;">   
     </div>-->
   </div>
  </div>

<?php endforeach; ?>


  </body>
  </html>


