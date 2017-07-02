<?php

	foreach($_POST as $key => $value){
		if (!empty($value)) {
			// nos champs sont remplis
			if ($key === "post_code") {
				// on vérifie si le code postal est un entier
				if (is_int($value)) {
					var_dump("Le code postal est valide.");
				} else {
					header("Location:part_form_fr.php");
				}
			}
		} else {
			header("Location:part_form_fr.php");

		}
	}


?>