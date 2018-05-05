  <?php
  session_start();
?>


  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
<?php
        $db = new PDO("mysql:host=localhost; dbname=projet_web; charset=UTF8", "root", "1234"); $a = $_SESSION['login']; ?> </h1>

        <?php $a = $_SESSION['login'];

        $sql="SELECT * FROM affiliation_media WHERE pseudo_utilisateur = '$a'";

        $stmt = $db->query($sql);

  $rows = $stmt->fetchALL(PDO::FETCH_ASSOC); ?>


       <?php foreach($rows as $row): ?>

<img src="<?php echo $row['nom_media'] ?>" class="img-thumbnail" alt="lol" width="304" height="170" style=" margin-left : 30px; height : 275px; width:auto;">

<?php
$medNum = $row['numero_media'];
echo $medNum;
 ?> 

<?php
 $sql="SELECT * FROM media WHERE numero_media = '$medNum'";

        $stmt = $db->query($sql);

  $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);

$lol = $row['nom_media'];
echo $lol;

?>

    <?php endforeach; ?>


  </body>
  </html>

