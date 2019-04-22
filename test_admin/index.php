<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	require_once 'Database.php';
	require '../views/admin/header.php';
	require '../views/admin/nav.php';

	?>

<div id="presentation-cons">


<?php 

	if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])):  ?>

		<a href="create_article">ajouter un article</a>

<?php endif ?>
	<?php 

	$req = $db->query('SELECT * FROM article');
	$articles = $req->fetchAll();

	foreach ($articles as $article): ?> 
		<div class="card" style="width: 300px;">
  <div class="card-divider">
    <?= $article['name'] ?>
  </div>
  <img src="../images/card_pusheen.jpg">
  <div class="card-section">
    <a href="single_article.php?id=<?= $article['id'] ?> "  >voir l'article</a>
  </div>
</div>
	<?php endforeach ?>



</div>


<script src="../Js/form.js"></script>
<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/what-input/dist/what-input.js"></script>
<script src="../node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="../js/app.js"></script>
</body>
</html>