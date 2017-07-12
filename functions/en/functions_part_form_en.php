<?php

	if (!empty($_POST['home_pax_number']) && !empty($_POST['pets'])) {
		if ($_POST['host'] === 'yes') {
			include("../../views/fr/part_form_fr.php");
		} else {
			echo ('Your registration request has been automatically submited and is now under review. Your login details will be sent to the email address you specify, once your registration has been received and approved by our service.<br /> <a href="../../projet/equipe/index.php">Click here to return to the Homepage.</a>');
		}
	}


?>