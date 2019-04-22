<?php session_start(); ?>

<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="../../css/app.css">
    <link rel="stylesheet" href="../../css/test.css">
  </head>
<html>

<body>

	<?php
	require_once '../Database.php';
	require '../../views/header.php';
	require '../../views/admin/nav_log.php';

	?>

	<div id="bgco">
	<h3>connexion</h3>


	<?php 

	if (isset($_POST) AND !empty($_POST)) {
		if (!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))) {

			$req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
			$req->execute([

				'username' => $_POST['username'],

				'password' => $_POST['password']
			]);

			$user = $req->fetch();

			if ($user) {
				$_SESSION['admin'] = $_POST['username'];

				header('location:index.php');
			}
			else{
				$error = 'identifiant incorect';
			}
		}


		else{
			$error = 'veuillez remplir les champs';
		}
	}

		if (isset($error)) {
			echo '<div class="error">'. $error .'</div>';
		}

		?>

<div id="log">
		<form  action="login.php" method="POST">

			<input type="text" name="username"/>

			<input type="password" name="password"/>

			<button id="bt_co">se connecter</button>

		</form>
</div>

</div>
		<?php

		require '../../views/footer.php';

		?>
