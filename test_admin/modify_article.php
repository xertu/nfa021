<?php session_start(); ?>

	<?php
	require_once 'Database.php';
	
	require '../views/admin/header.php';
	require '../views/admin/nav.php';

require_once 'function.php';


	$article = getArticle($db,1, $_GET['id']);

if (!isset($_GET['id'])) {
	header('location:index.php');
}

if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
	header('location:index.php');
}

if (isset($_POST) AND !empty($_POST)) {
	if (!empty($_POST['name']) AND !empty($_POST['content']) AND !empty($_POST['autor'])) {
			$req = $db->prepare('UPDATE article SET name = :name, content = :content, autor = :autor WHERE id = :id');
			$req->execute([
'name' => $_POST['name'],
'content' => $_POST['content'],
'autor' => $_POST['autor'],
'id' => $_GET['id'],
			]);
			$_SESSION['flash']['succes'] = 'article posté';
	}else{
		$_SESSION['flash']['error'] = 'champs manquants';
	}
	
}

	?>

<div class="modif_fiches">
	<h3>modifier l'article "<?= $article->name ?>"</h3>
	<h4>laissez vide si il n'y a aucun changement</h4>
	<?php
	if (isset($_SESSION['flash']['succes'])) {
		echo " <div class='succes'>".$_SESSION['flash']['succes'].'/div';
	}
	elseif (isset($_SESSION['flash']['error'])) {
		echo " <div class='error'>".$_SESSION['flash']['error'].'/div';
	}
	?>

	<form method="POST">
		<h4>nom:</h4>
		<input type="text" name="name" value="<?= $article->name ?>">
<h4>auteur</h4>
		<input type="text" name="autor" value="<?= $article->autor ?>">

		<h4>contenue</h4>
		<textarea name="content"><?= $article->content ?></textarea>
		<button>modifier</button>
	</form>
</div>


<script src="../Js/form.js"></script>
<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/what-input/dist/what-input.js"></script>
<script src="../node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="../js/app.js"></script>
</body>
</html>