<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Réseau de emmanuel.nguyen</h2>

 <?php

$db = new PDO("mysql:host=localhost; dbname=projet_web; charset=UTF8", "root", "1234");

$sql="SELECT * FROM reseau WHERE pseudo_utilisateur = 'emmanuel.nguyen'";

$stmt = $db->query($sql);

$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);//sans doublons de données.


?>
  <table class="table table-hover" border="1" width ="100%" cellpadding="4">
    <thead>
      <tr>
       
        <th>Contact</th>
        <th>Relation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach($rows as $row): ?>

<tr>
  <td><?php echo $row['pseudo_contact'] ?></td>
  <td><?php echo $row['relation_reseau'] ?></td>
</tr>

<?php endforeach; ?>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>


     