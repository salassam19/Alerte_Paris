<?php 

session_start();

	require('index.php'); 
	include('functions.php');


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









<!--


    else //On check le mot de passe
    {
        $query=$bdd->prepare('SELECT password, id, pseudo
        FROM particuliers WHERE pseudo = :pseudo');

        $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();

	if ($data['password'] == md5($_POST['password'])) // Acces OK !
	{
	    $_SESSION['pseudo'] = $data['pseudo'];
	    $_SESSION['id'] = $data['id'];

	    $message = '<p>Bienvenue '.$data['pseudo'].', 
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="index.php">ici</a> 
			pour revenir à la page d accueil</p>';  
	}
	else // Acces pas OK !
	{
	    $message = '<p>Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="login.php">ici</a> 
	    pour revenir à la page précédente
	    <br /><br />Cliquez <a href="index.php">ici</a> 
	    pour revenir à la page d accueil</p>';
	}
    $query->CloseCursor();
    }
    echo $message;//'</div></body></html>';

}
____________________
else
{
	if ($_POST['pseudo'] == $pseudo && $_POST['password'] == $password){

		echo "CONNECTE";
	}else{
		echo "Pas connecté";
	}
}

-->
