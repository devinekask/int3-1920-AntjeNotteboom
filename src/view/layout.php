<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Book-it</title>
    <?php /* NEW */ ?>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Courier+Prime:400,700|Poppins:400,700|Raleway:900&display=swap" rel="stylesheet">  <body>
    <main>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
      <header class="header">
        <h1 class="hidden">Humo</h1>
        <nav class="header__primenu">
            <ul class="header__primenu--items">
                <!-- <li class=""> <a class="header__primenu--item" href="index.php">Home</a></li>
                <li class=""> <a class="header__primenu--item" href="index.php">Actua</a> </li>
                <li class=""> <a class="header__primenu--item" href="index.php">Humor</a></li> -->
                <li class=""> <a class="header__primenu--item primenu__active" href="index.php">Boeken</a> </li>
                <li class="header__title"> <a class="link__white" href="index.php"> Humo</a></li>
                <!-- <li class=""> <a class="header__primenu--item" href="index.php"> Tv/film</a></li>
                <li class=""> <a class="header__primenu--item" href="index.php">Muziek</a> </li> -->

                <li class="header__primenu--item"> <a class="link__black" href="index.php?page=cart"> Shop (0)</a></li>
            </ul>
            </ul>
        </nav>
        <!-- <div class="header__submenu">
            <ul class="header__submenu--items">
                <li class="header__submenu--item">Reviews</li>
                <li class="header__submenu--item">Fictie</li>
                <li class="header__submenu--item">Non-fictie</li>
                <li class="header__submenu--item">Het lezen zoals het is</li>
                <li class="header__submenu--item">De grootste schrijvers van deze tijd</li>
                <li class="header__submenu--item"> <a class="link__black  submenu__active" href="index.php?page=cart"> Shop</a></li>
                <li class="header__submenu--item submenu__cart"> <a class="link__black" href="index.php?page=cart">()</a></li>
            </ul>
        </div> -->
    </header>
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
    <script src="http://localhost:8080/script.js"></script>
  </body>
</html>
