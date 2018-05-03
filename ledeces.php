<?php
$db = new PDO("mysql:host=localhost; dbname=dwm; charset=UTF8", "root", "1234");


$sql="SELECT * FROM users";

$stmt = $db->query($sql);

$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);//sans doublons de données.


?>

<!DOCTYPE html>
<html>
<head>
	

	<title></title>
</head>
<body>

	<h1>Users</h1>
	<form action="add.php" method="post">
		<input type="text" name="id" placeholder="ID">
		<input type="text" name="nom" placeholder="Nom">
		<input type="text" name="email" placeholder="Em@il">
		<button>Envoyer</button>
	</form>	
	<br><hr>

	<table border="1" width ="100%" cellpadding="4">
<tr><th>ID</th><th>NOM</th><th>email</th></tr>

<?php foreach($rows as $row): ?>

<tr>
	<td align="right"><?php echo $row['id'] ?></td>
	<td><?php echo $row['nom'] ?></td>
	<td><?php echo $row['email'] ?></td>
	<td><a href="del.php?idd=<?php echo $row['id'] ?>"> Supprimer</a></td>
	<td><a href="update.php?idd=<?php echo $row['id'] ?>"> Modifier</a></td>
</tr>

<?php endforeach; ?>
</table>

          <button><a href="trierID.php">trier par ordre croissant de ID</a></button>
         

</body>
</html>
