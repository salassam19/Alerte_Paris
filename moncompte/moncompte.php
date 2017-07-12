<?php 
include('index.php');
require('functions.php');

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$bdd = connexionbdd();

if (isset($_GET['id']) && $_GET['id'] > 0)
{
	$getid = intval($_GET['id']);
	$user = $bdd->prepare('SELECT * FROM membre WHERE id = ?');
	$user->execute(array($getid));

	while ($info = $user->fetch()) {
?>		

		<label><h3>Bienvenue</h3></label>
		<?php echo $info['pseudo'], " ", '<br/>' ?>

		<dl>
		<dt><label><strong>Nom :</strong></label></dt>
		<?php echo '<dd>', $info['nom'], " ", '</dd><br/>'?>
		</dl>

		<dl>
		<dt><label><strong>Prenom :</strong></label></dt>
		<?php echo '<dd>', $info['prenom'], " ", '</dd><br/>'?>
		</dl>

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
		?>
		<?php
		if (isset($_SESSION['id']) && $info['id'] == $_SESSION['id'])
		{
		?>
		<a href="deconnexion.php" class="btn btn-default">Se deconnecter</a>
		<?php
		}
		?>

<?php

	}
}
?>

</body>
</html>