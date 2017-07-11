<?php

function connexionbdd(){

	$bdd = new PDO('mysql:host=localhost;dbname=clients', "root", "");
	return $bdd;

}

















?>