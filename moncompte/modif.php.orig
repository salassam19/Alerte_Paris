<?php

//connection au serveur
  	$bdd = new PDO('mysql:host=localhost;dbname=clients', "root", "");


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$mobile = $_POST['mobile'];
$id = $_POST['id'];

    $req = "UPDATE particuliers
            SET nom = '".$nom."',
                prenom = '".$prenom."',
                mail = '".$mail."',
                mobile = '".$mobile."'
                WHERE id= '".$id."' ";


    // Execution de la requête
    $bdd->exec($req);

    
    header('Location:moncompte.php');


    exit();

?>