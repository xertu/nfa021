<?php session_start(); ?>


<body>

	<?php
	require_once '../Database.php';
	require '../../views/admin/espace-admin/header.php';
	require '../../views/admin/espace-admin/nav.php';

	?>

<h3>Bienvenue <?= $_SESSION['admin'] ?></h3>

	<a href="deco_admin.php">deconnexion</a>

	<?php 

	if (!$_SESSION['admin']) {
		header('location:login.php');
		# code...
	}

	$req = $db->query('SELECT * FROM users');
	$user = $req->fetch();

	?>
<script src="../../Js/form.js"></script>
<script src="../../node_modules/jquery/dist/jquery.js"></script>
<script src="../../node_modules/what-input/dist/what-input.js"></script>
<script src="../../node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="../../js/app.js"></script>
</body>
</html>