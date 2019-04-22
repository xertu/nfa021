

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
    <li ><a class="navigation" href="../html/index.php">accueil</a></li>
    <li ><a class="navigation" href="../html/index.php#services">services</a></li>
    <li ><a class="navigation" href="../html/index.php#contact">contact</a></li>
    <li ><a class="navigation" href="../test_admin/index.php">conseils</a></li>
   <?php if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {

    echo "<li><a href='admin/index.php'>admin</a></li>";
} else {
 

  echo "<li><a href='admin/login.php'>admin</a></li>";
}


?>

   

  </ul>

</div>
</div>
<script src="../jss/app.js"></script>
<script src="../jss/exercice.js"></script>