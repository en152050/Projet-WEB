<?php
  session_start();
?>
<!DOCTYPE html>

<html>
<head>
  <body>
        <?php
        $c=$_SESSION['login'];
       $email=$_GET['email'];
       $pseudo=$_GET['pseudo'];
       $emaillogin=$_GET['emaillogin'];
       

        ///Identifier la BDD
      $database = new PDO("mysql:host=localhost; dbname=projet_web; cahset=UTF8", "root", "1234");
        //Connecter l'utilisateur à la BDD

        $sql = "INSERT INTO reseau (pseudo_utilisateur, email_utilisateur) VALUES ('$c', ?)";
        $result = $database->prepare($sql);
        $result->bindValue(1, $email);
        $result->execute();

        $sql2 = "INSERT INTO reseau (pseudo_utilisateur, email_utilisateur) VALUES (?, ?)";
        $result2 = $database->prepare($sql2);
        $result2->bindValue(1, $pseudo);
        $result2->bindValue(2, $emaillogin);
        $result2->execute();
        header("location:res.php");

        ?>

        

  </body>
</head>
</html>
  	
