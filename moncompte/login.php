<?php 
	include('index.php'); 
	include('functions.php');

session_start();

?>

<?php

$bdd = connexionbdd();

if (isset($_POST['formconnexion']))
{

	$pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
	$mdpconnect = sha1($_POST['mdpconnect']);


	if (!empty($pseudoconnect) && !empty($mdpconnect))
	{
		$user = $bdd->prepare("SELECT * FROM membre WHERE pseudo = ? AND password = ?");

		$user->execute(array($pseudoconnect, $mdpconnect));

		$existuser = $user->rowCount();

		if ($existuser == 1)
		{
			$userinfo = $user->fetch();
			$_SESSION['id'] = $userinfo['id'];
			$_SESSION['pseudo'] = $userinfo['pseudo'];
			header('Location: moncompte.php?id='.$_SESSION['id']);
		}
		else
		{
			$erreur = "Mauvais pseudo ou mot de passe";
		}
	}
	else
	{
		$erreur = "Tous les champs doivent être complétés !";
	}
}

?>


<h1>Se connecter</h1>

<form action="" method="POST">

	<div class="form-group">
		<label>Pseudo</label>
		<input type="text" name="pseudoconnect" class="form-control" placeholder="Pseudo" />
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="mdpconnect" id="password" class="form-control" placeholder="Mot de passe" />
	</div>

	<input type="submit" name="formconnexion" class="btn btn-primary" value="Connexion" />

</form>

<?php

if (isset($erreur)){

    echo '<div style="color: red">'.$erreur.'</div>';
}



?>

