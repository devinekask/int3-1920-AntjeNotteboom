    <main class="main__winkel">
        <h2 class="winkel__title">Onze Winkel</h2>
        <article class="highlight">
            <div class="highlight__wrapper">
                <h3 class="highlight__title">Highlight van de week:</h3>
                <p class="highlight__book"><a class="link__black" href="index.php?page=detail&id=2">Wool - Hugh Howey</a></p>
                <p class="highlight__text">Lees de <a class="highlight__link" href="index.php?page=longreadHome">longread</a> of koop het boek <a
                        class="cart__button" href=""><img src="assets/icons/cart_icon.svg"
                            alt="voeg to in winkelmandje"></a></p>
            </div>
            <img class="highlight__img" src="assets/books/wool.jpg" alt="boek cover van Wool" width=""
                height="">
        </article>
        <div class="filter">
            <fieldset class="filter__options">
                <legend class="filter__label"> <span class="bold"> Filter:</span>
                  <a  class="filter__option link__black" href="#boeken">Boeken</a>
                  <a  class="filter__option link__black" href="#extra">Extra</a>
                  <a  class="filter__option link__black" href="#abonnement">Abonnement</a>
                </legend>
            </fieldset>
        </div>
        <section class="section books">
            <h3 class="section__title" id="boeken">Boeken</h3>
            <div class="section__wrapper">

            <?php foreach($products as $product){
              if($product['id'] <= 11){
              ?>
            <article class="book">
                    <a class="link__black" href="index.php?page=detail&amp;id=<?php echo $product['id'];?>">
                        <div class="book__image--wrapper">
                            <h4 class="book__title"><span class="book__author"><?php echo $product['author'];?></span> <br> <?php echo $product['title'];?></h4>
                            <img class="book__image" src="<?php echo $product['image'];?>" width="273" height="273"
                                alt="boek cover van <?php echo $product['title'];?>">
                        </div>
                    </a>
                    <div class="book__price--wrapper">
                        <p class="book__price"> &euro; <?php echo $product['price'];?></p>
                        <p class="book__discount">Korting: &euro; 4,99</p>
                        <p class="book__ebook">E-book: &euro; 1,99</p>
                        <button class="btn cart__button cart__button--book" type="submit" name="action" value="add"><img src="assets/icons/cart_icon.svg"
                                alt="voeg to in winkelmandje"></button>
                    </div>
                </article>
            <?php }} ?>

            </div>
        </section>
        <section class="section extra">
            <h3 class="section__title" id="extra">Extra's</h3>
            <div class="section__wrapper">

            <?php foreach($products as $product){
              if($product['id'] >=12 && $product['id'] <=18 ){
              ?>
            <article class="book">
                    <a class="link__black" href="index.php?page=detail&amp;id=<?php echo $product['id'];?>">
                        <div class="book__image--wrapper">
                            <h4 class="book__title"><span class="book__author"><?php echo $product['author'];?></span> <br> <?php echo $product['title'];?></h4>
                            <img class="book__image" src="<?php echo $product['image'];?>" width="273" height="273"
                                alt="boek cover van <?php echo $product['title'];?>">
                        </div>
                    </a>
                    <div class="book__price--wrapper">
                        <p class="book__price"> &euro; <?php echo $product['price'];?></p>
                        <p class="book__discount">Korting: &euro; 4,99</p>
                        <p class="book__ebook">E-book: &euro; 1,99</p>
                        <button class="btn cart__button cart__button--book" type="submit" name="action" value="add"><img src="assets/icons/cart_icon.svg"
                                alt="voeg to in winkelmandje"></button>
                    </div>
                </article>
             <?php }} ?>
              </div>
        </section>
        <section class="section abonnement">
            <h3 class="section__title" id="abonnement">Abonnement</h3>
            <div class="section__wrapper">

            <?php foreach($products as $product){
              if($product['id'] >=19 ){
              ?>
            <article class="book">
                    <a class="link__black" href="index.php?page=detail&amp;id=<?php echo $product['id'];?>">
                        <div class="book__image--wrapper">
                            <h4 class="book__title"><span class="book__author"><?php echo $product['author'];?></span> <br> <?php echo $product['title'];?></h4>
                            <img class="book__image" src="<?php echo $product['image'];?>" width="273" height="273"
                                alt="boek cover van <?php echo $product['title'];?>">
                        </div>
                    </a>
                    <div class="book__price--wrapper">
                        <p class="book__price"> &euro; <?php echo $product['price'];?></p>
                        <p class="book__discount">Korting: &euro; 4,99</p>
                        <p class="book__ebook">E-book: &euro; 1,99</p>
                        <button class="btn cart__button cart__button--book" type="submit" name="action" value="add"><img src="assets/icons/cart_icon.svg"
                                alt="voeg to in winkelmandje"></button>
                    </div>
                </article>
             <?php }} ?>

              </div>
        </section>

    </main>
