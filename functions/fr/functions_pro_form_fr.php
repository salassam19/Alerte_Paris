<?php

	foreach($_POST as $key => $value){
		if (!empty($value)) {
			// nos champs sont remplis
			if ($key === "post_code") {
				// on vérifie si le code postal est un entier
				if (is_int($value)) {
					var_dump("Le code postal est valide.");
				} else {
					alert ("Le code postal n'est pas valide.");
				}
			}
		} else {
			header("Location:pro_form_fr.php");

?>