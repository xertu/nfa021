<?php

$nom = $_POST['nom'] ;
$email = $_POST['email'] ;
$message = $_POST['message'];



echo ( "nom: <b>".$nom."</b><br>\n");
echo ( "email: <b>".$email."</b><br>\n");
echo ( "message: <b>".$message."</b><br>\n");
echo ("votre message a bien etait envoye");



mail('aurignac.johann@gmail.com','' , $nom. $email. $message);


?>

<a href="../html/index.php" class="button">retour a la page d'accueil</a>