<?php

	include ('bdd.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>

<?php
//On verifie que lidentifiant de lutilisateur est defini
if(isset($_GET['id']))
{
        $id = intval($_GET['id']);
        //On verifie que lutilisateur existe
        $dn = mysql_query('SELECT `nom`, `prenom`, `mail`, `mobile` FROM `particuliers` WHERE id="'.$id.'"');

        if(mysql_num_rows($dn)>0)
        {
                $dnn = mysql_fetch_array($dn);
                //On affiche les donnees de lutilisateur
?>
Voici le profil de "<?php echo htmlentities($dnn['nom']); ?>" :
<table style="width:500px;">
<tr>
        <td class="left"><h1><?php echo htmlentities($dnn['nom'], ENT_QUOTES, 'UTF-8'); ?></h1>

        Prenom: <?php echo htmlentities($dnn['prenom'], ENT_QUOTES, 'UTF-8'); ?><br />

        Email: <?php echo htmlentities($dnn['mail'], ENT_QUOTES, 'UTF-8'); ?><br />

        Mobile: <?php echo htmlentities($dnn['mobile'], ENT_QUOTES, 'UTF-8'); ?><br />	

    	</td>
    </tr>
</table>
</div>


</body>
</html>