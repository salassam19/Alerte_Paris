<?php include('index.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

session_start();

	$pseudo = $_POST['pseudo'];

	echo "Bienvenue <br/>".$_SESSION['pseudo'];


	$bdd = new PDO('mysql:host=localhost;dbname=clients', "root", "");



	$reponse = $bdd->query('SELECT * FROM particuliers');

	while ($info = $reponse->fetch()) {
?>		

		<label><strong>Bienvenue</strong></label>
		<?php echo $info['prenom'], " ", $info['nom'], '<br/>' ?>

		<dl>
		<dt><label><strong>Adresse Email :</strong></label></dt>
		<?php echo '<dd>', $info['mail'], " ", '</dd><br/>'?>
		</dl>

		<dl>
		<dt><label><strong>Téléphone mobile :</strong></label></dt>
		<?php echo '<dd>', $info['mobile'], " ", '</dd><br/>'?>
		</dl>

		<input type="submit" name="modifier" value="Modifier" <a href="form_modif.php?numC="<?= $info['id']?>"></a>

		echo "<td><a href='form_modif.php?numC=". $info['id'] ."'>Modifier</a></td>";

<?php	

	}

?>

</body>
</html>