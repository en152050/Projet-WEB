<?php

$username = isset($_POST["username"])? $_POST["username"] : "";
$verifpassword = isset($_POST["verifpassword"])? $_POST["verifpassword"] : "";




    ///Identifier la BDD
$database = "projet_web";
    //Connecter l'utilisateur à la BDD
$db_handle= mysqli_connect('localhost', 'root', '1234');
$db_found = mysqli_select_db($db_handle,$database);
if ($db_found) {
    
    
    
}
else {
    echo "Database livres is not found.";
}

mysqli_close($db_handle);


?>