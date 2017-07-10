<?php

	foreach($_POST as $key => $value){
		if (!empty($value)) {
			// nos champs sont remplis
			if($key === "email") {
				if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/")){
					// email valide
					var_dump("L'adresse email est valide.");
				} else {
					// email invalide
					alert("L'adresse email est non valide");
				}
			}
			// on vérifie que le password contient bien au moins 1 majuscule + 1 minuscule + 1 chiffre, et au moins 8 caractères
			if ($key === "password") {
				if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$#', $value)) {
        			var_dump("Mot de passe conforme");
				} else {
        			alert("Votre mot de passe est invalide ; il doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.");
        		}
			}	
			// on vérifie que les 2 mots de passe sont identiques
			$password1 = "password";
			$password2 = "conf_password";
			if ($password1 === $password2) {
				var_dump("Les 2 mots de passe sont identiques")
			} else {
				alert("Les 2 mots de passe ne sont pas identiques");
			}
		
		//sinon on renvoie au formulaire signin
		} else {
			header("Location:signin_form_fr.php");

		}
	}
			

		}
	}


?>