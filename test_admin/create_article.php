<?php

require_once 'Database.php';
require '../views/admin/header.php';
	require '../views/admin/nav.php';
?>


	<div class="create_fiches">

	<form method="POST">
		
		<label for="name">name</label>

		<input type="text" name="name" >
<label for="autor">autor</label>
		<input type="text" name="autor" value="">
<label for="content">content</label>
		<textarea name="content"></textarea>
		<button>creer</button>
	</form>
</div>


<?php

echo '<!--';

 	$name = $_POST['name'];
    $autor = $_POST['autor'];
    $content = $_POST['content'];

$req = $db->prepare("INSERT INTO article (name, autor, content) VALUES('$name', '$autor', '$content')" );

$req->execute(array($_POST['name'], $_POST['autor'], $_POST['content']));
echo '-->';
	?>

