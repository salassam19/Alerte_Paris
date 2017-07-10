<?php

	foreach($_POST as $key => $value){
		if (!empty($value)) {
			// nos champs sont remplis
			if ($key === "post_code") {
				// on vérifie si le code postal est un entier
				if (is_int($value)) {
					var_dump("The post code is ok.");
				} else {
					alert ("The post code is not valid.");
				}
			}
		} else {
			header("Location:pro_form_fr.php");

?>