<?php
	// on démarre l'utilisation des sessions
	session_start();

	// on teste si nos champs sont remplis
	foreach($_POST as $key => $value){
		if (!empty($value)) {
			// nos champs sont remplis
			if($key === "email") {
				if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/")){
					// email valide
					var_dump("L'adresse email est valide.");
				} else {
					// email invalide
					alert ("L'adresse email est non valide");
				}
			}
			// on vérifie que le password contient bien au moins 1 majuscule + 1 minuscule + 1 chiffre, et au moins 8 caractères
			if ($key === "password") {
				if (preg_match('#(?=.[a-z]+)(?=.[A-Z]+)(?=.[0-9]+).{8,}#')) {
        			var_dump("Mot de passe conforme");
				} else {
        			alert ("Votre mot de passe est invalide ; il doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.");
        		}
			}	
			// on vérifie que les 2 mots de passe sont identiques
			
			if ($_POST['password'] == $_POST['conf_password']) {
				var_dump("Les 2 mots de passe sont identiques");
			} else {
				 ("Les 2 mots de passe ne sont pas identiques.");
			}
		
		//sinon on renvoie au formulaire signin
		} else {
			header("Location:signin_fr.php");

		}
	}
			
	// on teste si il y a bien une checkbox sur le host et le choice_form
	if (isset($_POST['host']) AND isset($_POST['choice_form'])) {
		// si l'utilisateur répond qu'il est un particulier et qu'il souhaite accueillir des gens, on inclus le formulaire particuliers
		if (($_POST['host']) === 'yes' AND ($_POST['choice_form']) === 'private') {
			include("part_form_fr.php");
		} 
		// si l'utilisateur répond non pour accueillir et qu'il est un particulier, on enregistre son compte sans d'autres infos
		if (($_POST['host'] == 'no') AND ($_POST['choice_form']) == 'private') {
			echo "Votre compte a bien été enregistré.<br /> Pour revenir à la page d'accueil, cliquez <a href='index.php'>ici</a>.";
		}
		// si l'utilisateur répond oui pour accueillir et qu'il est un pro, on inclus le formulaire de particulier, puis on inclura ensuite le formulaire de professionnels
		if (($_POST['choice_form']) == 'professional') {
			include("part_form_fr.php");
		}
		// si' l'utilisateur répond non pour accueillir et qu'il est un pro, on inclus le formulaire des professionnels
		if (($_POST['choice_form']) == 'professional') {
			include("pro_form_fr.php");
		}
	}
	


?>