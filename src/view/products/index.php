    <main class="main__winkel">
      <div class="winkel__title--line">
       <div class="full__line"></div>
        <h2 class="winkel__title">Onze Winkel</h2>
        <div class="full__line"></div>
      </div>
        <article class="highlight__article">
          <div class="highlight">
            <div class="highlight__wrapper">
                <h3 class="highlight__title">Highlight van de week:</h3>
                <p class="highlight__book"><a class="link__black" href="index.php?page=detail&id=2">Wool - Hugh Howey</a></p>
                <p class="highlight__text">Lees de <a class="highlight__link" href="index.php?page=longreadHome">longread</a> of koop het boek<a
                        class="cart__button" href=""><img src="assets/icons/cart_icon.svg"
                            alt="voeg to in winkelmandje"></a></p>
            </div>
            <picture class="highlight__img">
              <source
               media="(max-width: 499px)"
               srcset="assets/books/wool_small.jpg">
              <img src="assets/books/wool.jpg" alt="boek cover van Wool" width=""height="">
           </picture>
          </div>
        </article>

        <div class="filter" id="boeken">
            <fieldset class="filter__options">
              <legend class="filter__label"> <span class="bold"> Filter:</span>
                <div class="filter__options--wrapper">
                  <a  class="filter__option link__black" href="#boeken">Boeken</a>
                  <a  class="filter__option link__black" href="#extra">Extra</a>
                  <a  class="filter__option link__black" href="#abonnement">Abonnement</a>
                </div>
              </legend>
            </fieldset>
        </div>

        <div class="section__wrapper">
        <section class="section books">
            <h3 class="section__title" >Boeken</h3>
            <div class="section__wrapper">
            <?php foreach($products as $product){
              if($product['id'] <= 1){
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

                        <form class="cart__button--wrapper" method="post" action="index.php?page=cart" >
                          <input type="hidden" name="product_id" value="<?php echo $product['id'];?>" />
                          <button class="cart__button cart__button--book btn" type="submit" name="action" value="add"><img src="assets/icons/cart_icon.svg"
                                alt="voeg to in winkelmandje"></button>
                       </form>

                    </div>
                </article>
            <?php }} ?>

            <?php foreach($products as $product){
              if($product['id'] >=2 && $product['id'] <=11 ){
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
                        <form class="cart__button--wrapper" method="post" action="index.php?page=cart">
                          <input type="hidden" name="product_id"  value="<?php echo $product['id'];?>" />
                          <button class="cart__button cart__button--book btn" type="submit" name="action" value="add"><img src="assets/icons/cart_icon.svg"
                                alt="voeg to in winkelmandje"></button>
                       </form>
                    </div>
                </article>
            <?php }} ?>
            </div>
        </section>

        <div class="striped__line" id="extra"></div>
        <section class="section extra" >
            <h3 class="section__title" >Extra's</h3>
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
                        <form class="cart__button--wrapper" method="post" action="index.php?page=cart">
                          <input type="hidden" name="product_id" value="<?php echo $product['id'];?>" />
                          <button class="cart__button cart__button--book btn" type="submit" name="action" value="add"><img src="assets/icons/cart_icon.svg"
                                alt="voeg to in winkelmandje"></button>
                       </form>
                    </div>
                </article>
             <?php }} ?>
              </div>
        </section>

        <div class="striped__line" id="abonnement"></div>
        <section class="section__abonnement" >
           <h3 class="section__title" >Abonnement</h3>
           <div class=" section__wrapper--abonnement">
          <?php foreach($products as $product){
              if($product['id'] >=19 ){
              ?>
            <article class="abonnement">
                <h4 class="book__title"><span class="book__author"><?php echo $product['author'];?></span> <br> <?php echo $product['title'];?></h4>
                <div class="abonnement__price">
                 <p class="book__price abonnement__price--item"> &euro; <?php echo $product['price'];?>/maand</p>
                 <form class="cart__button--wrapper" method="post" action="index.php?page=cart">
                          <input type="hidden" name="product_id" value="<?php echo $product['id'];?>" />
                          <button class="cart__button cart__button--book btn" type="submit" name="action" value="add"><img src="assets/icons/cart_icon.svg"
                                alt="voeg to in winkelmandje"></button>
                 </form>
                </div>
             </article>
             <div class="striped__line--detail"></div>
            <?php }} ?>

              </div>
        </section>
        </div>

    </main>
