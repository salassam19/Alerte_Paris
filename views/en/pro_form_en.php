<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../../style_form.css">
		<title>Registration form - Professionals</title>
	</head>

	<body>

		<h4>Registration as a professional</h4>
		<p>These informations can be modified at any time.<br>
		Fields marked with an asterisk are required.</p><br><br>

		<form method="GET" action="../../functions/functions_pro_form.php">

			<!-- L'utilisateur doit enter le nom de la société pour laquelle il travaille !-->
			<div>
				<label class="label" for="organisation_name">Name of organisation : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="organisation_name" value="" required><br><br>
			</div>

			<!-- On demande à l'utilisateur le secteur de la société pour laquelle il travaille !-->
			<div>
				<label class="label" for="operational_area">Operational area : <span class="asterisque">*</span></label>
				<select name="operational_area" class="required champ one_line">
					<option value="military">Military</option>
					<option value="medical">Medical, public health and disease control</option>
					<option value="enforcement">Low enforcement, military, homeland ans local/private security</option>
					<option value="geophysical">Geophysical service</option>
					<option value="meteorological">Meteorological service</option>
					<option value="emergency">General emergency and public service</option>
					<option value="rescue">Rescue and recovery service</option>
					<option value="fire">Fire suppression and rescue service</option>
					<option value="pollution">Pollution and other environmental service</option>
					<option value="transportation">Public and private transportation service</option>
					<option value="telecommunication">Utility, telecommunication, other non-transport infrastructure</option>
					<option value="chemical">Chemical, biological, radiological, nuclear or High-Yield Explosive threat or attack</option>
					<option value="monitoring">Monitoring service</option>
					<option value="other">Other</option>
				</select><br><br><br>
			</div>

			<!-- On demande à l'utilisateur de nous indiquer les raisons pour lesquelles il souhaite s'inscrire en tant que professionnel sur notre site !-->
			<div>
				<label class="label" for="registration_request">Rational registration request : <span class="asterisque">*</span></label>
				<textarea class="required champ one_line" style="width: 500px; height: 150px;" name="registration_request" placeholder="Please tell us why you ask access to ALERTE PARIS..." required></textarea>
			</div><br><br>

			<!-- On demande à l'utilisateur les coordonnées de sa société !-->
			<div>
				<label class="label" for="address">Address : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="address" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="province">Province/State : <span class="asterisque">*</span></label>
				<input class="required champ one_line" id="one_line" type="number" name="province" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="city">City : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="city" value="" required><br><br><br>
			</div>

			<!-- on fait un include pour la liste des pays !-->
			<?php include('countries_en.html'); ?>

			<div>
				<label class="label" for="mobile_phone">Mobile phone : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="number" name="mobile_phone" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="home_phone">Business phone : </label>
				<input class="champ one_line" type="number" name="home_phone" value=""><br><br><br>
			</div>

			<!-- On précise à l'utilisateur que nous allons procéder à une vérification avant la validation de son inscription !-->
			<div>
				<em class="bold_italic">Your login details will be sent to the email address you specify, once your registration has been received and approved by our service.</em><br><br>
				<input type="submit" name="registration" value="Register">
			</div>

		</form>

	</body>
</html>