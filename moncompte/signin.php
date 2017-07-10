<?php require('index.php'); ?>
<br>

<?php 

	if(isset($_POST['submit'])){
		$username = htmlentities($_POST['pseudo']);
		$password = $_POST['password'];
		$repeatpassword = htmlentities($_POST['repeatpassword']);

	if (!empty($username && $password)){

		if($password == $repeatpassword){

		$password = md5($password);

		$bdd = new PDO('mysql:host=localhost;dbname=clients', "root", "");

		$req = "INSERT INTO particuliers VALUES '".$username."', '".$mail."', '".$password."' ";
		
		$bdd->exec($req);

		die("Inscription terminer <a href='login.php'>Login</a>");
		}else{echo "Les 2 password doivent être identique";}
	}else{
		echo "Veuillez saisir tous les champs";
	}









	}




?>




<h1>S'Inscrire</h1>

<form action="signin.php" method="POST">
	<div class="form-group">
		<label>Pseudo</label>
		<input type="text" name="pseudo" class="form-control" />
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" />
	</div>

	<div class="form-group">
		<label>Retapez votre password</label>
		<input type="password" name="repeatpassword" class="form-control" />
	</div>

	<input type="submit" value="S'Enregistrer" id="submit" name="submit" class="btn btn-primary">
</form>