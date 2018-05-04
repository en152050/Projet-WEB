


	<?php
	$username = isset($_POST["username"])? $_POST["username"] : "";
	$verifpassword = isset($_POST["verifpassword"])? $_POST["verifpassword"] : "";
	/*$pass_hache = password_hash($_POST['verifpassword'], PASSWORD_DEFAULT);*/
	$email = isset($_POST["email"])? $_POST["email"] : "";

    ///Identifier la BDD
	$database = "projet_web";
    //Connecter l'utilisateur à la BDD
	$db_handle= mysqli_connect('localhost', 'root', '1234');
	$db_found = mysqli_select_db($db_handle,$database);
	if ($db_found) {

		$sql="SELECT pseudo_utilisateur, email_utilisateur, mot_de_passe_utilisateur FROM utilisateur WHERE pseudo_utilisateur = '$username' OR email_utilisateur = '$username' ";


		$result= mysqli_query($db_handle,$sql);
		/*$donnees = $result->fetch();*/
		while ($donnees = mysqli_fetch_assoc($result)) {
			if (strcmp($donnees['mot_de_passe_utilisateur'], $verifpassword) == 0) {
				
				/*header("location:Page d'accueil.html");*/
				$login=$username;
				echo "$login";
				?> <a href="Page d'accueil.html"> Cliquez ici pour acceder a la page d'accueil </a> <?php
				
			}
			else {
				echo "Mauvais mot de passe";
				?> <a href="Connexion.html"> Cliquez ici pour reessayer. </a> <?php
			}


		}


	}
	else {
		echo "Database livres is not found.";
	}

	mysqli_close($db_handle);


?>

