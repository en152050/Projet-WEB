<?php

  session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "utf.8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}


/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  bottom: 38%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

.a_droite
{
    display:inline;
    float: left;
}


/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>



<div class="container">
  
    <div class="row">
      
      <div class="vl">
        <span class="vl-innertext">ou</span>
      </div>
      
      <!-- Colonne : Pour se créer un compte  -->
      <div class="col">
      	<h2 style="text-align:center">Cr&eacute;ation d'un nouveau compte</h2>
      	<form action="Creationcompte.php" method="post" >
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="prenom" placeholder="Pr&eacute;nom" required>
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="pseudo" placeholder="Pseudo" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
    	
        <input type="submit" value="Cr&eacute;er mon compte"> 
   		</form>
      </div>

      <!-- Colonne : Pour se connecter à son compte  -->
      <div class="col">

      	<h2 style="text-align:center">Connexion &agrave; un compte existant</h2>
        
      	<form action="Connexion_real.php" method="post" >
        <input type="text" name="username" placeholder="Pseudo" required>
        <input type="password" name="verifpassword" placeholder="Mot de passe" required >
        <input type="submit" value="Connexion">
        <a href="#" style="color:black" class="btn">Mot de passe oubli&eacute; ? </a>
        </form>
      </div>
      
    </div>
  
</div>

</body>
</html>
