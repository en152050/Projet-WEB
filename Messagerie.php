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
    <h1> Messagerie </h1>
    <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">
           <div class="col-xs-12 col-md-12">
            <div class="panel panel-default">
                   <div class="panel-heading top-bar">
                       <div class="col-md-8 col-xs-8">
                           <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat </h3>
                       </div>
                       <div class="col-md-4 col-xs-4" style="text-align: right;">
                           
                       </div>
                   </div>
                   <div class="panel-body msg_container_base">
                       <div class="row msg_container base_sent">
                           <div class="col-md-10 col-xs-10">
                               <div class="messages msg_sent">
                                   <p></p>
                                   <time datetime="2009-11-13T20:00"></time>
                               </div>
                           </div>
                           <div class="col-md-2 col-xs-2 avatar">
                               <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                           </div>
                       </div>
                       <div class="row msg_container base_receive">
                           <div class="col-md-2 col-xs-2 avatar">
                               
                           </div>
                           <div class="col-md-10 col-xs-10">
                               <div class="messages msg_receive">
                                   <p></p>
                                   <time datetime="2009-11-13T20:00"></time>
                               </div>
                           </div>
                       </div>
                       <div class="row msg_container base_receive">
                           <div class="col-md-2 col-xs-2 avatar">
                               
                           </div>
                           <div class="col-xs-10 col-md-10">
                               <div class="messages msg_receive">
                                   <p></p>
                                   <time datetime="2009-11-13T20:00"></time>
                               </div>
                           </div>
                       </div>
                       <div class="row msg_container base_sent">
                           <div class="col-xs-10 col-md-10">
                               <div class="messages msg_sent">
                                   <p></p>
                                   <time datetime="2009-11-13T20:00"></time>
                               </div>
                           </div>
                           <div class="col-md-2 col-xs-2 avatar">
                               
                           </div>
                       </div>
                       <div class="row msg_container base_receive">
                           <div class="col-md-2 col-xs-2 avatar">
                               
                           </div>
                           <div class="col-xs-10 col-md-10">
                               <div class="messages msg_receive">
                                   <p></p>
                                   <time datetime="2009-11-13T20:00"></time>
                               </div>
                           </div>
                       </div>
                       <div class="row msg_container base_sent">
                           <div class="col-md-10 col-xs-10 ">
                               <div class="messages msg_sent">
                                   <p></p>
                                   <time datetime="2009-11-13T20:00"></time>
                               </div>
                           </div>
                           <div class="col-md-2 col-xs-2 avatar">
                               
                           </div>
                       </div>
                   </div>
                   <div class="panel-footer">
                       <div class="input-group">
                           <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                           <span class="input-group-btn">
                           <button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
                           </span>
                       </div>
                   </div>
          </div>
           </div>
       </div>
       
       
    
</div>





</body>
</html>