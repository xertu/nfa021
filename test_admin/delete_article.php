<?php
session_start();


require_once 'Database.php';

require '../views/admin/header.php';
	require '../views/admin/nav.php';

if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
	if (isset($_GET['id'])) {
		$req = $db->query('SELECT * FROM article WHERE id = '.$_GET['id']);
		$article = $req->fetch();
		if (article) {
			$req = $db->query('DELETE FROM article WHERE id = '.$_GET['id']);
			header('location:index.php');
		}
		
	}
}
else{
	header('location:index.php');
}



?>