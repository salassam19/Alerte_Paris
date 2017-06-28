<?php

	foreach($_POST as $key => $value){
		if (!empty($value)) {
			// nos champs sont remplis
			if($key === "email") {
				if(filter_var($value, FILTER_VALIDATE_EMAIL)){
					// email valide
					var_dump("L'adresse email est valide.");
				} else {
					// email invalide
					header("Location:part_form_fr.php");
				}
			}
			if ($key === "password") {
				if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$#', $value)) {
        			var_dump("Mot de passe conforme");
				} else {
        			header("Mot de passe non conforme");
        		}
			}	
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