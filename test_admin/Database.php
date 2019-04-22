<?php 

$db = new PDO('mysql:host=localhost;dbname=calendrier_catclinic', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
