<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../../style_form.css">
		<title>Inscription  - Alerte Paris</title>
	</head>

	<body>

		<h4>Inscription</h4>
		<p>Ces informations sont modifiables à tout moment.<br>
		Tous les champs précédés d'un astérisque sont obligatoires.</p><br><br><br>
		
		<form method="POST" action="../../functions/fr/functions_signin_fr.php">

		<!-- On demande à l'utilisateur son nom et son prénom !-->
			<div>
				<label class="label" for="last_name">Nom : <span class="asterisque">*</span></label>
				<input class="required one_line"  type="text" name="last_name" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="first_name">Prénom : <span class="asterisque">*</span></label>
				<input class="required one_line" type="text" name="first_name" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="birthday">Date de naissance : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="date" name="birthday" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="gender">Sexe : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="radio" name="gender" value="male" required>Homme<br>
				<input class="required champ one_line" type="radio" name="gender" value="female" required>Femme<br><br>
			</div>

			<!-- On demande à l'utilisateur ses coordonnées personnelles !-->
			<div>
				<label class="label" for="address">Adresse : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="address" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="post_code">Code Postal : <span class="asterisque">*</span></label>
				<input class="required champ one_line" id="post_code" type="number" name="post_code" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="city">Ville : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="city" value="" required><br><br>
			</div>

			<!-- on fait un include pour la liste des pays !-->
			<?php include('countries_fr.html'); ?>

			<div> 
				<label class="label" for="mobile_phone">Téléphone mobile : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="number" name="mobile_phone" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="home_phone">Téléphone fixe : </label>
				<input class="champ one_line" type="number" name="home_phone" value=""><br><br><br>
			</div>

			<!-- On demande à l'utilisateur les infos nécessaires à la création de son compte !-->
			<div>
				<label class="label" for="pseudo">Pseudo : <span class="asterisque">*</span></label>
				<input class="required one_line"  type="text" name="pseudo" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="email">Adresse email : <span class="asterisque">*</span></label>
				<input class="required one_line email" type="email" name="email" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="password">Mot de passe : <span class="asterisque">*</span><br><em>Votre mot de passe doit contenir au moins 8 caractères avec<br>au moins une majuscule, une minuscule et un chiffre.</em></label>
				<input class="required one_line" type="password" name="password" value="" required><br><br><br>
			</div>

			<div>
				<label class="label" for="conf_password">Confirmation du mot de passe : <span class="asterisque">*</span></label>
				<input class="required one_line" type="password" name="conf_password" value="" required><br><br><br>
			</div>

			<!-- On demande à l'utilisateur s'il souhaite héberger des personnes sinistrées, si oui, on fait un include vers le formulaire correspondant !-->
			<div>
				<label for="host">Je souhaite héberger des personnnes sinistrées par une catastrophe naturelle ou industrielle.<span class="asterisque">*</span></label><br>
				<input type="radio" class="radio" name="host" value="yes" checked="checked" /><label for="host"> Oui </label><br>
				<input type="radio" class="radio" name="host" value="no" /><label for="host"> Non </label><br><br><br><br>
			</div>

			<!-- Le choix fait par l'utilisateur le dirigera vers le formulaire correspondant (particulier ou professionnel) !-->
			<div>
				<label>Je suis : <span class="asterisque">*</span></label><br>
				<input type="radio" class="radio" name="choice_form" value="private" id="private" checked="checked" /><label for="choice_form"> Un particulier</label><br>
				<input type="radio" class="radio" name="choice_form" value="professional" id="professional" /><label for="choice_form"> Un professionnel</label><br><br><br><br>
			</div> 

			<!-- Checkbox à cocher pour que l'utilisateur n'ai pas à introduire à chaque connexion son id et son password !-->
			<div>
				<input class="radio" type="checkbox" name="remember_me">
				<label for="remember_me">Se souvenir de moi</label><br><br>
			</div>

			<div>
				<input class="valid_btn" type="submit" name="registration" value="Enregistrer">
			</div>

			</form>



	

	</body>

</html>