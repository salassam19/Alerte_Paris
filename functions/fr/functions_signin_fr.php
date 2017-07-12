<?php
	
	// on déclare nos variables
		$pseudo 			= $_POST['pseudo'];
		$last_name 			= $_POST['last_name'];
		$first_name 		= $_POST['first_name'];
		$email 				= $_POST['email'];
		$password 			= $_POST['password'];
		$conf_password		= $_POST['conf_password'];
		$birthday 			= $_POST['birthday'];
		$gender 			= $_POST['gender'];
		$address 			= $_POST['address'];
		$post_code 			= $_POST['post_code'];
		$city 				= $_POST['city'];
		$country 			= $_POST['country'];
		$mobile_phone 		= $_POST['mobile_phone'];
		$home_phone 		= $_POST['home_phone'];
		$host 				= $_POST['host'];
		$choice_form		= $_POST['choice_form'];

		// on teste si nos champs sont remplis
		if (!empty($last_name) && !empty($first_name) && !empty($email) && !empty($password) && !empty($conf_password) && !empty($birthday) && !empty($gender) && !empty($address) && !empty($post_code) && !empty($city) && !empty($country) && !empty($mobile_phone) && !empty($home_phone) && !empty($host) && !empty($choice_form)) {
			// nos champs sont remplis
			if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)){
				// email valide
				?><script language="javascript"> console.log("L'email est ok.");</script><?php
			} else {
				// email invalide
				?><script language="javascript"> alert("L'adresse email n'est pas valide.);</script><?php
			}
			// on impose un password contenant au moins 8 caractères, 1 majuscule, 1 minuscule et 1 chiffre
			if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}#', $password)) {
				// mot de passe valide
				?><script language="javascript"> console.log("Le mot de passe est ok.");</script><?php
			} else {
				// mot de passe non conforme
				?><script language="javascript"> alert("Votre mot de passe doit contenir au moins 8 caractère, une majuscule, une minuscule et 1 chiffre.");</script><?php
			}
			// on vérifie que les 2 mots de passe sont identiques
			if ($password == $conf_password) {
				// les 2 mots de passe sont identiques
				?><script language="javascript"> console.log("Les 2 mots de passe sont identiques.");</script><?php
			}else{
				// les 2 mots de passe ne sont pas identiques
				?><script language="javascript"> alert("Les 2 mots de passe ne sont pas identiques.");</script><?php
			}
		}else {
			header('Location:../../views/fr/signin_fr.php');
		}
	
	

	include("../functions_bdd.php");
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