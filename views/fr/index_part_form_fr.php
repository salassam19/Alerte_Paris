<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style_form.css">
		<title>Formulaire d'inscription - Particuliers</title>
	</head>

	<body>

		<h4>Inscription en tant que particulier</h4>
		<p>Ces informations sont modifiables à tout moment.</p>
		<p>Tous les champs précédés d'un astérisque sont obligatoires.</p><br><br>

		<form onsubmit="return verif_form()"">

		<!-- On demande les infos générales de l'utilisateur !-->
			<div>
				<label for="address">Adresse : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="address" value="" required><br><br>
			</div>

			<div>
				<label for="post_code">Code Postal : <span class="asterisque">*</span></label>
				<input class="required champ one_line" id="post_code" type="number" name="post_code" value="" required><br><br>
			</div>

			<div>
				<label for="city">Ville : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="text" name="city" value="" required><br><br>
			</div>

			<div>
				<label for="mobile_phone">Téléphone mobile : <span class="asterisque">*</span></label>
				<input class="required champ one_line" type="number" name="mobile_phone" value="" required><br><br>
			</div>

			<div>
				<label for="home_phone">Téléphone fixe : </label>
				<input class="champ one_line" type="number" name="home_phone" value=""><br><br><br>
			</div>

			<!-- On demande toutes les infos concernant les personnes vivant dans le foyer !-->
			<div>
				<label for="pax_number">Combien de personnes vivent atuellement dans le foyer ? <span class="asterisque">*</span></label><br>
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
				<label for="home_pax_number">Combien de personnes êtes-vous en capacité d'accueillir dans votre foyer ? <span class="asterisque">*</span></label><br>
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
				<label for="pax-type">Acceptez-vous d'accueillir : <span class="asterisque">*</span></label><br>
				<select class="required champ">
					<option value="man_only">Uniquement des personnes de sexe masculin</option>
					<option value="woman_only">Uniquement des personnes de sexe féminin</option>
					<option value="both">Des personnes de sexe masculin et/ou féminin</option>
				</select><br><br><br>
			</div>

			<!-- On demande à l'utilisateur s'il accepte d'accueillir un(des) enfant(s) accompagné(s) d'adulte(s), ou uniquement des adultes !-->
			<div>
				<label for="pax-type">Acceptez-vous d'accueillir : <span class="asterisque">*</span></label><br>
				<select class="required champ">
					<option value="adult_only">Uniquement des adultes</option>
					<option value="adult_and_child">Un (ou des) adulte(s) accompagné(s) d'un (ou de plusieurs) enfant(s)</option>
				</select><br><br><br>
			</div>

			<!-- On demande si l'utilisateur possède un ou plusieurs lit(s) bébé(s) qu'il pourrait mettre à disposition pour les personnes sinistrées qu'il accueillera !-->
			<div>
				<label for="crib">Possédez-vous un ou plusieurs lits bébé afin d'accueillir un(ou des) adulte(s) accompagné(s) d'un (ou de) bébé(s) de moins de 2 ans ?<span class="asterisque">*</span></label><br>
				<select class="required champ">
					<option value="yes">Oui</option>
					<option value="no">Non</option>
				</select><br><br>
			</div>

			<div>
				<label for="crib_number">Si oui, combien ? </label>
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
				<input type="submit" name="registration" value="Envoyer">
			</div>


		</form>



	

	</body>

</html>