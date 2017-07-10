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
//try{
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
            SET nom = $nom,
                prenom = $prenom,
                mail = $mail,
                mobile = $mobile
                WHERE id= $id ";


    // Prepare statement
    $info = $bdd->prepare($req);

    // execute the query
    $info->execute();
    
    // echo a message to say the UPDATE succeeded
    echo $info->rowCount() . " champs modifiés avec succès";

    //}
/*catch(PDOException $e)
    {
    echo $req . "<br>" . $e->getCode();
    }*/

$bdd = null;

?>