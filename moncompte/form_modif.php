<?php include('index.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>Modifier mes informations</h2>

<form action="modif.php" method="POST">

<?php

	$bdd = new PDO('mysql:host=localhost;dbname=clients', "root", "");


	$req = $bdd->prepare('SELECT * FROM particuliers WHERE id');

	$req->execute();

	if ($req) {

		while ($info = $req->fetch() ) {
			
?>

		<input type="hidden" name="id" value="<?= $info['id'] ?>">

	<p>
		<label>Nom :</label>
		<input type="text" id="nom" name="nom" value="<?= $info['nom'] ?>">
	</p>

	<p>
		<label>Prenom :</label>
		<input type="text" id="prenom" name="prenom" value="<?= $info['prenom']?>">
	</p>

	<p>
		<label>Adresse Email :</label>
		<input type="email" id="mail" name="mail" value="<?= $info['mail'] ?>">
	</p>

	<p>
		<label>Téléphone portable :</label>
		<input type="text" id="mobile" name="mobile" value="<?= $info['mobile'] ?>">
	</p>

	<input type="submit" class="btn btn-primary" value="Enregistrer les modifications"/>

<?php 
	}
}
?>
</body>
</html>