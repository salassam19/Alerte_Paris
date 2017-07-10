<?php
/*session_start();
// on vérifie toujours qu'il s'agit d'un membre qui est connecté
if (!isset($_SESSION['email'])) {
        // si le membre n'est pas connecté, on le redirige vers l'accueil
        header ('Location: /index.php');
        exit();
}
else
{}*/

//connection au serveur
  	$bdd = new PDO('mysql:host=localhost;dbname=clients', "root", "");

 // set the PDO error mode to exception
    //$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

    echo "Modifications prises en compte.";
    
    header('Location:moncompte.php');

    exit();

?>