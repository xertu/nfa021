<?php session_start(); ?>

	<?php
	require_once 'Database.php';
	
	require '../views/admin/header.php';
	require '../views/admin/nav.php';

require_once 'function.php';


	$article = getArticle($db,1, $_GET['id']);


	?>


<div id="single_article" class="grid-x">
      <div class="cell small-6" id="single_article_left">
        <img id="img_article" src="../images/card_pusheen.jpg">
      </div>
       
      
    
    <div class="cell small-6" id="single_article_right" >
      <h4 class="separator-left"><?= $article->name ?></h4>
      <p><?= $article->content ?></p>
    </div>
  
</div>










<?php 

	if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])):  ?>

<a href="delete_article.php?id=<?= $article->id ?>"><p>supprimer cet article</p></a>


<a href="modify_article.php?id=<?= $article->id ?>"><p>modifier cet article</p></a>

<a href="admin/"><p>espace admin</p></a>

<?php endif ?>

<script src="../Js/form.js"></script>
<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/what-input/dist/what-input.js"></script>
<script src="../node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="../js/app.js"></script>
</body>
</html>