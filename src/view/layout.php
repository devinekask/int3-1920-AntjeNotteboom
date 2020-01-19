<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Binger</title>
    <?php /* NEW */ ?>
    <?php echo $css;?>
    <link href="../../style.css" rel="stylesheet">
  </head>
  <body>
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
        <a href="index.php" class="header__title"><h1>binger</h1></a>
         <nav class="header__menu header--hidden">
          <ul class="header__menu--items">
           <li><a class="header__menu--item" href="index.php?page=search"><img src="../assets/img/film.png"
              alt="film icoon">Add serie</a></li>
           <li><a class="header__menu--item" href="index.php?page=serie"><img src="../assets/img/ticket.png"
              alt="ticket icoon">Add date</a></li>
          </ul>
         </nav>
      </header>
      <?php echo $content;?>
    </main>
    <footer class="navigation__bottom footer">
      <nav class="header__menu footer__menu--hidden">
          <ul class="header__menu--items">
           <li><a class="header__menu--item" href="index.php?page=search"><img src="../assets/img/film.png"
              alt="film icoon">Add serie</a></li>
           <li><a class="header__menu--item" href="index.php?page=serie"><img src="../assets/img/ticket.png"
              alt="ticket icoon">Add date</a></li>
          </ul>
      </nav>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
