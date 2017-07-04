<?php

	session_start();

	include ('bdd.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	$Us;


	if (isset($_GET['id']) ){
		

		$id = intval($_GET['id']);

		//On verifie que lutilisateur existe
        $User = mysql_query('SELECT `nom`, `prenom`, `mail`, `mobile` FROM `particuliers` WHERE id="'.$id.'"');
	
		if (mysql_num_rows($User)>0) {
			//On affiche les données de l'utilisateur
			$Us = mysql_fetch_array($User);
		}
	}
?>

<p>Mon compte <?php $Us = mysql_fetch_array($User); echo htmlentities($Us['prenom']); ?> :</p>

<table style="width: 500px;">
	<tr>
		<td>
			Email : <?php echo htmlentities($Us['mail']); ?><br />

			Mobile : <?php echo htmlentities($Us['mobile']); ?><br />
		</td>
	</tr>
</table>

</body>
</html>