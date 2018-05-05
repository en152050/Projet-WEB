<?php
  session_start();

  	$c=$_SESSION['login'];
	$cheminphoto = isset($_POST["cheminphoto"])? $_POST["cheminphoto"] : "";


    ///Identifier la BDD
	$database = "projet_web";
	$conn = mysqli_connect('localhost', 'root', '1234', $database);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
    //Connecter l'utilisateur à la BDD
	
	
	
    $sql = "UPDATE utilisateur SET photo_utilisateur= '$cheminphoto' WHERE pseudo_utilisateur = '$c' ";
    
    

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    header("location:Profil.php");

    mysqli_close($conn);




    







?>