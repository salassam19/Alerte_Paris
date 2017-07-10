<?php include('index.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>Modifier mes informations</h2>
<br>

<form action="modif.php" method="POST">

<?php

	$bdd = new PDO('mysql:host=localhost;dbname=clients', "root", "");


	$req = $bdd->prepare('SELECT * FROM particuliers WHERE id');

	$req->execute();

	if ($req) {

		while ($info = $req->fetch() ) {
			
?>

		<input type="hidden" name="id" value="<?= $info['id'] ?>">

	<form class="form-horizontal" >

	<div class="form-group">
		<label class="col-sm-2 control-label">Nom :</label>
		<input type="text" id="nom" name="nom" class="form-control" value="<?= $info['nom'] ?>">
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Prenom :</label>
		<input type="text" id="prenom" name="prenom" class="form-control" value="<?= $info['prenom']?>">
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Adresse Email :</label>
		<input type="email" id="mail" name="mail" class="form-control" value="<?= $info['mail'] ?>">
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Téléphone portable :</label>
		<input type="text" id="mobile" name="mobile" class="form-control" value="<?= $info['mobile'] ?>">
	</div>
<br>
		<input type="submit" class="btn btn-primary" value="Enregistrer les modifications"/>

	</form>

<?php 
	}
}
?>
</body>
</html>