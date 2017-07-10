<?php include('index.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php


	$bdd = new PDO('mysql:host=localhost;dbname=clients', "root", "");


	$reponse = $bdd->query('SELECT * FROM particuliers');

	while ($info = $reponse->fetch()) {
?>		

		<label><h3>Bienvenue </h3></label>
		<?php echo $info['prenom'], " ", $info['nom'], '<br/>' ?>

		<dl>
		<dt><label><strong>Adresse Email :</strong></label></dt>
		<?php echo '<dd>', $info['mail'], " ", '</dd><br/>'?>
		</dl>

		<dl>
		<dt><label><strong>Téléphone mobile :</strong></label></dt>
		<?php echo '<dd>', $info['mobile'], " ", '</dd><br/>'?>
		</dl>

<?php
		echo "<a class='btn btn-primary' href='form_modif.php?numC=". $info['id'] ."'>Modifier</a>";

	}

?>

</body>
</html>