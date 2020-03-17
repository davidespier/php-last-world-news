<?php
  include("core/control/control.php");
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="apple-touch-icon" sizes="180x180" href="core/design/img/lwn.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="core/design/img/lwn.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="core/design/img/lwn.ico">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Last world news - LWN</title>

  <link href="core/design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="core/design/nnw.css" rel="stylesheet">

</head>

<body>

<div class="container">
  <div class="row">
    <div class="nav-bar text-center">
      <div class="col-md-12">
        <div class="nav-bar-header">
          <a class="nav-bar-header-lang" href="?country=co&lang=co">CO</a>
          <a class="nav-bar-header-lang" href="?country=de&lang=de">DE</a>
          <a class="nav-bar-header-lang" href="?country=fr&lang=fr">FR</a>
          <a class="nav-bar-header-lang" href="?country=it&lang=it">IT</a>
          <a class="nav-bar-header-lang" href="?country=mx&lang=mx">MX</a>       
          <a class="nav-bar-header-lang" href="?country=pt&lang=pt">PT</a>
          <a class="nav-bar-header-lang" href="?country=ro&lang=ro">RO</a> 
          <a class="nav-bar-header-lang" href="?country=ru&lang=ru">RU</a>      
          <a class="nav-bar-header-lang" href="?country=us&lang=us">US</a>
        </div>
      </div>

      <div class="col-md-12">
        <img width="150" height="150" src="core/design/img/lwn-transparent.png">
        <hr>
        <?php
          load_lang_categorys($lang);
        ?>
      </div>

    </div>

    <?php
      load_news_general($title, $urlToImage, $url, $news);    
    ?>

    <footer>
      <br>
        <?php
          load_lang_categorys($lang);
        ?>
      <hr>
      <p class="footer-copyright">Copyright 2020 @ LWN </p>
      <a target="_blank" href="http://www.davidespier.com" class="created-by" >Created and design by davidespier.com</a>
    </footer>
  </div>
</div>

  <script src="core/design/vendor/jquery/jquery.slim.min.js"></script>
  <script src="core/design/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
