<link rel="stylesheet" type="text/css" href="css/style_contact.css">

<div id="contact">
	<form class="formulaire">
		<h4 class="titre">Contact</h4><br><br>
		<div class="block">
			<div>
				<label for="last_name" class="libelle">Nom : <span class="asterisque">*</span></label><br><br>
				<input class="entree_texte" type="text" name="last_name" value="" required><br><br>
			</div>
			<div>
				<label for="first_name" class="libelle">Prenom : <span class="asterisque">*</span></label><br><br>
				<input class="entree_texte" type="text" name="first_name" value="" required><br><br>
			</div>
			<div>
				<label for="email" class="libelle">Email : <span class="asterisque">*</span></label><br><br>
				<input class="entree_texte" type="email" name="email" value="" required><br><br>
			</div>
		</div>
		<div class="block">
			<div>
				<label for="message" class="libelle label_message">Votre message : <span class="asterisque">*</span></label><br><br>
				<textarea class="message" name="message" placeholder="Ecrivez votre message ici..." required></textarea><br><br><br>
			</div>
		</div>
		<div>
			<button class="boutton">Envoyer le message</button><br><br><br>
		</div>
	</form>
</div>