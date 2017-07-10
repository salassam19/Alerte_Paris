<?php

	foreach($_POST as $key => $value){
		if (!empty($value)) {
			// nos champs sont remplis
			if($key === "email") {
				if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/")){
					// email valide
					var_dump("The email address is ok.");
				} else {
					// email invalide
					alert("The email address is not valid.");
				}
			}
			// on vérifie que le password contient bien au moins 1 majuscule + 1 minuscule + 1 chiffre, et au moins 8 caractères
			if ($key === "password") {
				if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$#', $value)) {
        			var_dump("The password is valid.");
				} else {
        			alert("Your password is invalid ; it must contained at least 8 characters, 1 capital case, 1 lower case and 1 number.");
        		}
			}	
			// on vérifie que les 2 mots de passe sont identiques
			$password1 = "password";
			$password2 = "conf_password";
			if ($password1 === $password2) {
				var_dump("The passwords are equal.")
			} else {
				alert("The passwords are not equal.");
			}
			
		} else {
			header("Location:index_main_form_fr.php");

		}
	}


?>