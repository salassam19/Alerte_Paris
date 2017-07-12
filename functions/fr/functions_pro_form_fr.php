<?php

	

	if ($_POST['host'] === 'yes') {
		include("../../views/fr/part_form_fr.php");
	} else {
		echo ('Votre demande d\'inscription a bien été envoyée. Vos identifiants vous seront envoyés après validation de votre inscription par nos services.<br /> Pour revenir à la page d\'accueil, cliquez <a href="../../projet/equipe/index.php">ici</a>.');
	}
	
?>