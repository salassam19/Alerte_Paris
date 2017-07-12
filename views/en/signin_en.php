<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../../style_form.css">
		<title>Registration - Alerte Paris</title>
	</head>

	<body>

		<h4>Registration</h4>
		<p>These informations can be modified at any time.<br>
		Fields marked with an asterisk are required.</p><br><br>

		<form class="form-horizontal" method="POST" action="../../functions/functions_signin_en.php">

		<!-- On demande à l'utilisateur son nom et son prénom !-->
			<div>
				<label class="label" for="last_name">Last Name : <span class="asterisque">*</span></label>
				<input class="required champ one_line"  type="text" name="last_name" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="first_name">First Name : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="first_name" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="birthday">Date of birth : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="date" name="birthday" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="gender">Gender : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="radio" name="gender" value="male" required>Man<br>
				<input class="required champ one_line" type="radio" name="gender" value="female" required>Woman<br><br>
			</div>

			<!-- On demande à l'utilisateur ses coordonnées personnelles !-->
			<div>
				<label class="label" for="address">Address : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="address" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="post_code">Post Code : <span class="asterisque">*</span></label>
				<input class="required champ one_line" id="post_code" type="number" name="post_code" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="city">City : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="city" value="" required><br><br>
			</div>

			<!-- on fait un include pour la liste des pays !-->
			<?php include('countries_en.html'); ?>

			<div>
				<label class="label" for="mobile_phone">Mobile Phone : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="number" name="mobile_phone" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="home_phone">Home Phone : </label>
				<input class="champ one_line" type="number" name="home_phone" value=""><br><br><br>
			</div>


			<!-- On demande à l'utilisateur les infos nécessaires à la création de son compte !-->
			<div>
				<label class="label" for="pseudo">Pseudo : <span class="asterisque">*</span></label>
				<input class="required champ one_line"  type="text" name="pseudo" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="email">Email : <span class="asterisque">*</span></label>
				<input class="required champ one_line email" type="email" name="email" value="" required><br><br>
			</div>

			<div>
				<label class="label" for="password">Password : <span class="asterisque">*</span><br><em>Your password must contained at least 8 characters, one capital case, one lower case and one figure.</em></label>
				<input class="required champ one_line" type="password" name="password" value="" required><br><br><br>
				
			</div>

			<div>
				<label class="label" for="conf_password">Please confirm your password: <span class="asterisque">*</span></label>
				<input class="required one_line" type="password" name="conf_password" value="" required><br><br><br>
			</div>

			<!-- On demande à l'utilisateur s'il souhaite héberger des personnes sinistrées, si oui, on fait un include vers le formulaire correspondant !-->
			<div>
				<label for="host">I would like to host people affected by natural or industrial disaster.<span class="asterisque">*</span></label><br>
				<input type="radio" class="radio" name="host" value="yes" checked="checked" /><label for="host"> Oui </label><br>
				<input type="radio" class="radio" name="host" value="no" /><label for="host"> Non </label><br><br><br><br>
			</div>

			<!-- Le choix fait par l'utilisateur le dirigera vers le formulaire correspondant (particulier ou professionnel) !-->
			<div>
				<label>I am : <span class="asterisque">*</span></label><br>
				<input type="radio" class="radio" name="choice_form" value="private" id="private" checked="checked" /><label for="choice_form"> A private user</label><br>
				<input type="radio" class="radio" name="choice_form" value="professional" id="professional" /><label for="choice_form"> A professional user</label><br><br><br><br>
			</div> 

			<!-- Checkbox à cocher pour que l'utilisateur n'ai pas à introduire à chaque connexion son id et son password !-->
			<div>
				<input class="radio" type="checkbox" name="remember_me">
				<label for="remember_me">Remember me</label><br><br>
			</div>

			<div>
				<input type="submit" name="registration" value="Register">
			</div>

			</form>



	

	</body>

</html>