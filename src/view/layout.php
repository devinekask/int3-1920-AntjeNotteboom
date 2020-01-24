<!DOCTYPE html>
<html lang="ned">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book-it</title>
    <!-- <?php echo $css;?> -->
     <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Courier+Prime:400,700|Oswald|Love+Ya+Like+A+Sister|Playfair+Display|Poppins:400,700|Raleway:400&display=swap" rel="stylesheet">
  </head>
    <body>
      <header class="header">
        <h1 class="hidden">Humo</h1>
        <nav class="header__primenu">
            <ul class="header__primenu--items">
                <li class=""> <a class="header__primenu--item primenu__active" href="index.php">Boeken</a> </li>
                <li class="header__title"> <a class="link__white" href="index.php"> Humo</a></li>
                <li class=""> <a class="header__primenu--item link__black" href="index.php?page=cart"> Shop (<?php echo $numItems;?>)</a></li>
            </ul>
        </nav>
    </header>

    <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
    <main>
      <?php echo $content;?>
    </main>
    <footer class="navigation__bottom footer">
      <ul class="footer__items">
        <li class="footer__item"> <a class="link__white" href="index.php">Humo</a> </li>
        <li class="footer__item"> <a class="link__white" href="index.php">Boeken</a> </li>
        <li class="footer__item"> <a class="link__white" href="index.php?page=cart">Shop</a> </li>
        <li class="footer__item"> <a class="link__white" href="index.php?page=longreadHome">Longread: Wool</a> </li>
      </ul>
    </footer>
    <!-- <script src="http://localhost:8080/script.js"></script> -->
    <?php echo $js; ?>
  </body>
</html>
