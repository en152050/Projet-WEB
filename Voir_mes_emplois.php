<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<title> Profil </title>

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
    <h1> Emplois </h1>
    
    <div class="row">
    <div class="col-lg-3" style="border-right:inset; height:1500px; "> 
      <a href="Voir_mes_emplois.php"> <input type="button" value="Voir vos publications"> </a>
      <a href="Ajouter_emploi.php"> <input type="button" value="Ajouter une annonce"> </a>
      <a href="Partager_emploi.php"> <input type="button" value="Partager une offre"> </a>
    </div>


    <div class="col-lg-9" style="height:1500px; "> 
        <?php
          $a=$_SESSION['login'];
          $database = "projet_web";
            //Connecter l'utilisateur à la BDD
          $db_handle= mysqli_connect('localhost', 'root', '1234');
          $db_found = mysqli_select_db($db_handle,$database);
          if ($db_found) {
            $sql = "SELECT * FROM annonce WHERE pseudo_utilisateur = '$a'";
            $result = mysqli_query($db_handle, $sql);
            
            while ($data = mysqli_fetch_assoc($result)) {
                 
                 $b = $data['nom_emploi'];
                 

                $sql2 = "SELECT * FROM emploi WHERE nom_emploi = '$b' ";
                $result2 = mysqli_query($db_handle, $sql2);
                while ($data2 = mysqli_fetch_assoc($result2)) {

                                            
                                            echo "Nom de l'Emploi : "                                   .$data2['nom_emploi'].  '<br>';

                                            echo "Description de l'emploi : "                               .$data2['description_emploi'].  '<br>';
                                            echo "Experience : "                                  .$data2['experience_emploi'].  '<br>';
                                            echo "Capacités : "                        .$data2['capacites_emploi'].  '<br>';
                                            echo "Rémunération : "                             .$data2['remuneration_emploi'].  '<br>';
                                            echo "Lieu : "                              .$data2['lieu_emploi'].  '<br>';
                                            echo "Type : "                   .$data2['type_emploi'].  '<br>';
                                            echo "Societe : "            .$data2['societe_emploi'].  '<br>';
                                            echo "Duree : "            .$data2['duree_emploi'].  '<br>';            
                                            
                                            
                                            ?> <a href="effacer_emploi.php?nom_emploi=<?= $data2['nom_emploi'] ?>"> <img src="effacer.png" alt="effacer" height="30" width="30" > </a>
                                              <a href="modifier_emploi.php?nom_emploi=<?= $data2['nom_emploi'] ?> &description_emploi=<?= $data2['description_emploi'] ?> &experience_emploi=<?= $data2['experience_emploi'] ?> &capacites_emploi=<?= $data2['capacites_emploi'] ?> &remuneration_emploi=<?= $data2['remuneration_emploi'] ?> &lieu_emploi=<?= $data2['lieu_emploi'] ?> &type_emploi=<?= $data2['type_emploi'] ?> &societe_emploi=<?= $data2['societe_emploi'] ?> &duree_emploi=<?= $data2['duree_emploi'] ?>"> <img src="modifier.png" alt="modifier" height="30" width="30" > </a>
                                            <?php
                                            echo "<br />";
                                            echo "<br />";
                                            
                                        }




            }

           
            

            

          }
          else {
              echo "Database Projet_web is not found.";
          }
          mysqli_close($db_handle);

        ?>
      
    </div>

  </div>
</div>





</body>
</html>