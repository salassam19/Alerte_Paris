<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style_form.css">
		<title>Register - Private User</title>
	</head>

	<body>

		<h4>Register as a private user</h4>
		<p>These informations can be modified at any time.</p>
		<p>Fields marked with an asterisk are required.</p><br><br>

		<form onsubmit="return verif_form()"">

		<!-- On demande les infos générales de l'utilisateur !-->
			<div>
				<label for="address">Address : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="address" value="" required><br><br>
			</div>

			<div>
				<label for="post_code">Post Code : <span class="asterisque">*</span></label>
				<input class="required champ one_line" id="post_code" type="number" name="post_code" value="" required><br><br>
			</div>

			<div>
				<label for="city">City : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="city" value="" required><br><br>
			</div>

			<div>
				<label for="mobile_phone">Mobile Phone : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="number" name="mobile_phone" value="" required><br><br>
			</div>

			<div>
				<label for="home_phone">Home Phone : </label>
				<input class="champ one_line" type="number" name="home_phone" value=""><br><br><br>
			</div>

			<!-- On demande toutes les infos concernant les personnes vivant dans le foyer !-->
			<div>
				<label for="pax_number">How many people live actually in your home, included you ? <span class="asterisque">*</span></label><br>
				<select class="required champ">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select>
			</div><br><br><br>

			<!-- On se renseigne sur le nombre de personnes que l'utilisateur peut accueillir !-->
			<div>
				<label for="home_pax_number">How many people could you host in your home ? <span class="asterisque">*</span></label><br>
				<select class="required champ">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select>
			</div><br><br><br>

			<!-- On demande à l'utilisateur s'il accepte d'accueillir aussi bien des hommes que des femmes, ou seulement des hommes, ou seulement des femmes !-->
			<div>
				<label for="pax-type">You want to host : <span class="asterisque">*</span></label><br>
				<select class="required champ">
					<option value="man_only">Man only</option>
					<option value="woman_only">Woman only</option>
					<option value="both">Man and/or woman</option>
				</select><br><br><br>
			</div>

			<!-- On demande à l'utilisateur s'il accepte d'accueillir un(des) enfant(s) accompagné(s) d'adulte(s), ou uniquement des adultes !-->
			<div>
				<label for="pax-type">You want to host : <span class="asterisque">*</span></label><br>
				<select class="required champ">
					<option value="adult_only">Adults only</option>
					<option value="adult_and_child">Single(s) and adult(s) with child</option>
				</select><br><br><br>
			</div>

			<!-- On demande si l'utilisateur possède un ou plusieurs lit(s) bébé(s) qu'il pourrait mettre à disposition pour les personnes sinistrées qu'il accueillera !-->
			<div>
				<label for="crib">Have you got one (or more) crib(s) to host adult(s) with baby(ies) under 2 years ? <span class="asterisque">*</span></label><br>
				<select class="required champ">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div><br>

			<div>
				<label for="crib_number">If yes, how many crib(s) have you got ? </label>
				<select class="required champ">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
			</div><br><br><br>

			<div>
				<input type="submit" name="registration" value="Send">
			</div>


		</form>



	

	</body>

</html>