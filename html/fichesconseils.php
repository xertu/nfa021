<?php


global $content;
$vheader = new VHeader();
$vcontent = new $content['class']();


/**
*layout
*ce qui sera toujours affiche
*/


?>
<!-- infos pratiques -->

<header>
 <?php $vheader->showHeader(); ?>
</header>











<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/what-input/dist/what-input.js"></script>
<script src="../node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="../jss/app.js"></script>
<script src="../jss/exercice.js"></script>


</body>
</html>
