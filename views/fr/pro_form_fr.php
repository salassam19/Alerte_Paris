<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../../style_form.css">
		<title>Inscription - Professionnel</title>
	</head>

	<body>

		<h4>Inscription pour les professionnels</h4>

		<p>Ces informations sont modifiables à tout moment.<br>
		Les champs précédés d'un astérisque sont obligatoires.</p><br><br>

		<form method="POST" action="../../functions/fr/functions_pro_form.php">

			<!-- L'utilisateur doit enter le nom de la société pour laquelle il travaille !-->
			<div>
				<label class="label" for="organisation_name">Nom de votre société : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="organisation_name" value="" required><br><br>
			</div>

			<!-- On demande à l'utilisateur le secteur de la société pour laquelle il travaille !-->
			<div>
				<label class="label" for="operational_area">Secteur d'activité de votre société : <span class="asterisque">*</span></label>
				<select name="operational_area" class="required champ one_line">
					<option value="military">Militaire</option>
					<option value="medical">Professionnel de la santé</option>
					<option value="enforcement">Juridique, force de l'ordre, sécurité privée ou publique</option>
					<option value="geophysical">Géophysique</option>
					<option value="meteorological">Météorologie</option>
					<option value="emergency">Services d'urgence et de secours</option>
					<option value="pollution">Services environnementaux</option>
					<option value="transportation">Transports public et privé</option>
					<option value="telecommunication">Télécommunications</option>
					<option value="chemical">Chimie, biologie, radiologie, nucléaire</option>
					<option value="other">Autre</option>
				</select><br><br><br>
			</div>

			<!-- On demande à l'utilisateur de nous indiquer les raisons pour lesquelles il souhaite s'inscrire en tant que professionnel sur notre site !-->
			<div>
				<label class="label" for="registration_request">Les raisons pour lesquelles je souhaite m'inscrire : <span class="asterisque">*</span></label>
				<textarea class="required champ one_line" style="width: 500px; height: 150px;" name="registration_request" placeholder="Expliquez-nous pourquoi vous souhaitez vous inscrire en tant que professionnel sur notre site ALERTE PARIS" required></textarea>
			</div><br><br>

			<!-- On demande à l'utilisateur les coordonnées de sa société !-->
			<div>
				<label class="label" for="address">Adresse de votre société : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="address" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="province">Code Postal : <span class="asterisque">*</span></label>
				<input class="required champ one_line" id="one_line" type="number" name="province" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="city">Ville : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="city" value="" required><br><br><br>
			</div>

			<!-- on fait un include pour la liste des pays !-->
			<?php include('countries_fr.html'); ?>

			<div>
				<label class="label" for="mobile_phone">Téléphone portable : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="number" name="mobile_phone" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="home_phone">Téléphone professionnel : </label>
				<input class="champ one_line" type="number" name="home_phone" value=""><br><br><br>
			</div>

			<!-- On demande à l'utilisateur s'il souhaite héberger des personnes sinistrées, si oui, on fait un include vers le formulaire correspondant !-->
			<div>
				<label for="host">Je souhaite héberger des personnnes sinistrées par une catastrophe naturelle ou industrielle.<span class="asterisque">*</span></label><br>
				<input type="radio" class="radio" name="host" value="yes" checked="checked" /><label for="host"> Oui </label><br>
				<input type="radio" class="radio" name="host" value="no" /><label for="host"> Non </label><br><br><br><br>
			</div>

			<!-- On précise à l'utilisateur que nous allons procéder à une vérification avant la validation de son inscription !-->
			<div>
				<p><em class="bold_italic">Vos identifiants vous seront envoyés après validation de votre inscription par nos services.</em></p><br><br>
				<input type="submit" name="registration" value="Enregistrer">
			</div>

		</form>

	</body>
</html>