<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Mon Page</title>
</head>
<body>
<div>
	<h3>Contactez moi !!!</h3>
</div>


<!-- Ceci est un comentaire -->

<form> <!-- creer un formulaire -->

<label for="sujet">Sujet</label>
<input id="sujet" type="text" name="sujet" placeholder="écrivez votre sujet..." value="Le sujet de mon mail" /><br/>

<label>Vous êtez....</label><br/>

<input type="radio" name="genre" value="Mr">  Un monsiuer<br/>
<input type="radio" name="genre" value="Mme"> Une dame<br/>

<textarea style="font-size: 20px;color: #fff;background-color: #0000000; " placeholder="Message...."></textarea><br/>

<p>
	<input type="checkbox" checked="true" required="required" name="accept"> J'accepte que mon email soit sauvegarder en base de données.
</p>

<p>
	<input type="checkbox" required="required" name="accept"> Je m'inscrit à la newletter de ce site.
</p>

<input type="submit" value="Envoyer le formulaire">  


</form>

</body>

</html>