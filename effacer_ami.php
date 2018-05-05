<?php
  session_start();

  	$c=$_SESSION['login'];
	

    ///Identifier la BDD
	$database = "projet_web";
    //Connecter l'utilisateur à la BDD
	$db_handle= mysqli_connect('localhost', 'root', '1234');
	$db_found = mysqli_select_db($db_handle,$database);
	if ($db_found) {
		$d = $_SESSION['titre'];
    $sql = "DELETE FROM reseau WHERE pseudo_utilisateur = '$c' AND email_utilisateur = 'hade14@hotmail.fr' ";
    $result = mysqli_query($db_handle, $sql);


    


    header("location:res.php");
}
else {
    echo "Database Projet_web is not found.";
}

mysqli_close($db_handle);