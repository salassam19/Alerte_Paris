<?php

	include("../functions_bdd.php")
	
	// on teste si nos champs sont remplis
	foreach ($_POST as $key => $value){
		if (!empty($value)) {
			// nos champs sont remplis
			$email = $_POST['email'];
				if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)){
					// email valide
					if ($key === "password") {
					$password = $_POST['password'];
						if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}#', $password)) {
							$conf_password = $_POST["conf_password"];
							if ($password == $conf_password) {
				} else {
					// email invalide
					echo("L'adresse email est non valide.");
				}
					} else {
						echo('Votre mot de passe doit contenir au moins 8 caractères, 1 majuscule, 1 minuscule et 1 chiffre.');
					}
						} else {
							echo('Les 2 mots de passe ne sont pas identiques.');
						}
				}
		}
	}
	
	// on appelle notre fonction de connexion à la bdd
	connexion_bdd();

	// on appelle notre fonction pour l'enregistrement des données du formulaire signin dans la bdd
	signin_register();

							
	// on teste si il y a bien une checkbox sur le host et le choice_form
	if (isset($_POST['host']) AND isset($_POST['choice_form'])) {
		// si l'utilisateur répond qu'il est un particulier et qu'il souhaite accueillir des gens, on inclus le formulaire particuliers
		if (($_POST['host']) === 'yes' AND ($_POST['choice_form']) === 'private') {
			include("../../views/fr/part_form_fr.php");
		} 
		// si l'utilisateur répond non pour accueillir et qu'il est un particulier, on enregistre son compte sans d'autres infos
		if (($_POST['host'] === 'no') AND ($_POST['choice_form']) === 'private') {
			echo "Votre compte a bien été enregistré.<br /> Pour revenir à la page d'accueil, cliquez <a href='../../projet/equipe/index.php'>ici</a>.";
		}
		// si' l'utilisateur répond non pour accueillir et qu'il est un pro, on inclus le formulaire des professionnels
		if (($_POST['host'] === 'no') AND ($_POST['choice_form']) === 'professional') {
			include("../../views/fr/pro_form_fr.php");
		}
		// si l'utilisateur répond oui pour accueillir et qu'il est un pro, on inclus le formulaire de particulier, puis on inclura ensuite le formulaire de professionnels
		if (($_POST['host'] === 'yes') AND ($_POST['choice_form']) === 'professional') {
			include("../../views/fr/part_form_fr.php");
		}
	}



	


?>