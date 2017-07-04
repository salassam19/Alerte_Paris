<?php


	function bdd(){
		$bdd = mysqli_connect("localhost","root","","clients");
		return $bdd;
	}




?>