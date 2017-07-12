<?php 
    require('index.php'); 
    include('functions.php');
?>

<?php

    $bdd = connexionbdd();

if (isset($_POST['forminscription'])){

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        $mdp2 = sha1($_POST['mdp2']);


    if (!empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['mdp2'])) {

        $pseudolength = strlen($pseudo);

        if ($pseudolength <= 255){

            $reqpseudo = $bdd->prepare('SELECT * FROM membre WHERE pseudo = ?');

            $reqpseudo->execute(array($pseudo));

            $pseudoexist = $reqpseudo->rowCount();

            if ($reqpseudo == 0){


                    if ($mdp == $mdp2){

                        $req = "INSERT INTO `membre` (`pseudo`, `password`) VALUES ('$pseudo', '$mdp')";
                       
                        $req2 = $bdd->exec($req);

                        $erreur = "Votre compte a bien été créé !";header('Location:login.php');

                    }
                    else
                    {

                        $erreur = "Vos mot de passes ne correspondent pas";
                    }
            }
            else
            {
                $erreur = "Pseudo déjà utilisé !";
            }

        }
        else
        {

            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
        }

    }
    else
    {

        $erreur = "Tous les champs doivent être remplis !";
    }

}

?>

<h1>S'Inscrire</h1>

<form action="" method="POST">

	<div class="form-group">
		<label>Pseudo</label>
		<input type="text" name="pseudo" class="form-control" value="<?php if(isset($pseudo)) {echo $pseudo; }?>" />
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="mdp" class="form-control" />
	</div>

	<div class="form-group">
		<label>Retapez votre password</label>
		<input type="password" name="mdp2" class="form-control" />
	</div>

	<input type="submit" value="Inscription" id="submit" name="forminscription" class="btn btn-primary">

</form>

<?php

if (isset($erreur)){

    echo '<div style="color: red">'.$erreur.'</div>';
}

?>