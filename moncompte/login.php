<?php require('index.php'); ?>
<br>
<?php

session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['pseudo'];
		$password = $_POST['password'];

		if ($username && $password){
			

			$bdd = new PDO('mysql:host=localhost;dbname=clients', "root", "");


			$req = "SELECT * FROM particuliers WHERE pseudo = '".$username."', password = '".$password."' ";
		
			$info = $bdd->prepare($req);
			$info->execute();

			//$rows = $bdd->rowCount();

			/*if ($rows==1){

				$_SESSION['pseudo'] = $username;

				header('Location:moncompte.php');
			}*/



		}else echo "Pseudo ou password incorrect";


	}



?>


<h1>Se connecter</h1>

<form action="login.php" method="POST">
	<div class="form-group">
		<label>Pseudo</label>
		<input type="text" name="pseudo" class="form-control" />
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" />
	</div>

	<input type="submit" name="submit" class="btn btn-primary" value="Connexion">
</form>