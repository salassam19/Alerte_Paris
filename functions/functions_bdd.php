<?php

	// Connexion à la bdd
	function connexion_bdd() {
		$bdd = $bdd = new PDO('mysql:host=localhost;dbname=alerte_paris;"root", ""');
	}

	// Enregistrement des données dans la bdd à partir du formulaire signin
	function signin_register() {}
	$req = $bdd->prepare('INSERT INTO auteur (aut_pseudo, aut_nom, aut_prenom, aut_email, aut_password, aut_birthday, aut_sexe, aut_adresse, aut_code_postal, aut_ville, aut_pays, aut_mobile, aut_fix, aut_hebergeur, aut_pro) VALUES (:pseudo, :last_name, :first_name, :email, :password, :birthday, :gender, :address, :post_code, :city, :country, :mobile_phone, :home_phone, :host, :choice_form)');

	$req->execute(array(
		'aut_pseudo' 		=> $_POST['pseudo'];
		'aut_nom' 			=> $_POST['last_name'];
		'aut_prenom' 		=> $_POST['first_name'];
		'aut_email' 		=> $_POST['email'];
		'aut_password'		=> $_POST['password'];
		'aut_birthday' 		=> $_POST['birthday'];
		'aut_sexe'			=> $_POST['gender'];
		'aut_adresse' 		=> $_POST['address'];
		'aut_code_postal'	=> $_POST['post_code'];
		'aut_ville' 		=> $_POST['city'];
		'aut_pays' 			=> $_POST['country'];
		'aut_mobile' 		=> $_POST['mobile_phone'];
		'aut_fix' 			=> $_POST['home_phone'];
		'aut_hebergeur' 	=> $_POST['host'];
		'aut_pro' 			=> $_POST['choice_form'];
	));