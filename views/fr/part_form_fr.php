<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../../style_form.css">
		<title>Formulaire d'inscription - Particuliers</title>
	</head>

	<body>

		<h4>Je souhaite accueillir chez moi des personnes sinistrées<br>suite à une catastrophe naturelle ou industrielle</h4>
		<p>Ces informations sont modifiables à tout moment.<br><br>
		Tous les champs précédés d'un astérisque sont obligatoires.</p><br><br><br><br><br>

		<form method="POST" action="../../functions/fr/functions_part_form.php">

			<!-- On se renseigne sur le nombre de personnes que l'utilisateur peut accueillir !-->
			<div>
				<label for="home_pax_number">Combien de personnes êtes-vous en capacité d'accueillir dans votre foyer ? <span class="asterisque">*</span></label><br>
				<select name="home_pax_number" class="required champ one_line">
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

			<!-- On demande si un animal de compagnie vit dans le foyer afin de prévenir de tout risque d'allergie !-->
			<div>
				<label>Possédez-vous un (ou plusieurs) animal(aux) de compagnie ? <span class="asterisque">*</span><br><em class="italic">Cette information nous permettra de prévenir de tout risque d'allergie.</em></label><br>
				<input type="radio" name="pets" value="oui" id="oui" checked="checked" /><label for="pets"> Oui</label><br>
				<input type="radio" name="pets" value="no" id="no" /><label for="pets"> Non</label><br><br><br><br>
			</div> 

			<div>
				<input type="submit" name="registration" value="Enregistrer">
			</div>


		</form>

	</body>

</html>