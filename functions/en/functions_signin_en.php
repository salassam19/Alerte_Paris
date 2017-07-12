<?php
	
	// on teste si nos champs sont remplis
	foreach($_POST as $key => $value){
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
					echo("Your email address is ok.");
				}
					} else {
						echo('Your password must contained at least 8 characters, one lowercase, one uppercase and one number.');
					}
						} else {
							echo('Your 2 passwords are equal.');
						}
				}
		}	
	}
							
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
				if (!empty($_POST['home_pax_number']) && !empty($_POST['pets'])) {
					include("../../views/fr/pro_form_fr.php");
				}
		}
	}


	
	


?>