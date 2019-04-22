
<?php 
session_start();


require_once '../test_admin/Database.php';
 ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="../css/app.css">
  </head>
  <body>


   <div  data-sticky-container>
  <div class="title-bar" data-sticky data-margin-top='0' data-top-anchor="header:bottom">
  
  
 
  


  <ul class="menu align-center" >
    <li ><a class="navigation" href="index.php">accueil</a></li>
    <li ><a class="navigation" href="#services">services</a></li>
    <li ><a class="navigation" href="../test_admin/index.php">fiches conseils</a></li>
    <li ><a class="navigation" href="#contact">Contacts</a></li>

    <?php if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {

    echo "<li><a href='../test_admin/admin/index.php'>admin</a></li>";
} else {
 

  echo "<li><a href='../test_admin/admin/login.php'>admin</a></li>";
}


?>
   
  </ul>

</div>
</div>
<script src="../jss/app.js"></script>
<script src="../jss/exercice.js"></script>