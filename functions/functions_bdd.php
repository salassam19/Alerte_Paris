<?php

	// Connexion à la bdd
	function connexion_bdd() {
		$bdd = new PDO('mysql:host=localhost;dbname=alerte_paris;charset=utf8', 'root', '');
		return $bdd;
	}

	// Enregistrement des données dans la bdd à partir du formulaire signin
	function signin_register() {
	// on déclare les variables pour indiquer où aller chercher les valeurs
		$pseudo 			= $_POST['pseudo'];
		$last_name 			= $_POST['last_name'];
		$first_name 		= $_POST['first_name'];
		$email 				= $_POST['email'];
		$password 			= $_POST['password'];
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

		$bdd = new PDO('mysql:host=localhost;dbname=alerte_paris;charset=utf8', 'root', '');
		$req = $bdd->prepare('INSERT INTO "auteur" ("aut_pseudo", "aut_nom", "aut_prenom", "aut_email", "aut_password", "aut_birthday", "aut_sexe", "aut_adresse", "aut_code_postal", "aut_ville", "aut_pays", "aut_mobile", "aut_fix", "aut_hebergeur", "aut_pro") VALUES ($pseudo, $last_name, $first_name, $email, $password, $birthday, $gender, $address, $post_code, $city, $country, $mobile_phone, $home_phone, $host, $choice_form)');


		$req->execute(array(
			'aut_pseudo' 		=> $pseudo,
			'aut_nom' 			=> $last_name,
			'aut_prenom' 		=> $first_name,
			'aut_email' 		=> $email,
			'aut_password'		=> $password,
			'aut_birthday' 		=> $birthday,
			'aut_sexe'			=> $gender,
			'aut_adresse' 		=> $address,
			'aut_code_postal'	=> $post_code,
			'aut_ville' 		=> $city,
			'aut_pays' 			=> $country,
			'aut_mobile' 		=> $mobile_phone,
			'aut_fix' 			=> $home_phone,
			'aut_hebergeur' 	=> $host,
			'aut_pro' 			=> $choice_form
		));
	
	}