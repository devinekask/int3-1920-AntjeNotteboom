<main class="main__detail">

        <a class="back" href="index.php">&#60; terug</a>
        <section class="detail__product">
            <h2 class="hidden">Detail</h2>
            <article class="product__wrapper">
                <div class="product__images--wrapper">
                    <img class="product__image" src="<?php echo $product['image'];?>"
                        alt="boek wool van hugh howey" width="355rem">

                    <img class="product__image--small" src="<?php echo $product['image'];?>" alt="boek"
                        width="70rem">
                </div>
                <div class="product__information--wrapper">
                    <h3 class="product__title"> <?php echo $product['title'];?></h3>
                    <p class="product__author"><?php echo $product['author'];?></p>

                    <div class="striped__line--detail"></div>
                    <div class="product__price--wrapper">
                        <p class="book__price">&euro;<?php echo $product['price'];?></p>
                        <div class="book__discount--wrapper">
                        <p class="book__discount">Korting: &euro;4.99</p>
                        <p class="book__discount--text">U vindt de kortingcode op de flap rond Humo van die betreffende week</p>
                        </div>

                    </div>

                    <p class="book__ebook">E-book: &euro;1.99</p>

                    <div class="striped__line--detail"></div>
                    <fieldset class="filter__options">
                        <legend class="filter__label">
                            <input class="" type="radio" name="book" id="paperback"> <label class="book__option"
                                for="paperback">Paperback &euro;12.99 </label>
                            <input class="" type="radio" name="book" id="e-book"><label class="book__option"
                                for="e-book">E-book &euro;1.99</label>
                        </legend>
                    </fieldset>
                    <a class="cart__button cart__button--product" href="index.php?page=cart"> + In mijn winkelwagen <img
                            src="assets/icons/cart_icon.svg" alt="voeg to in winkelmandje"></a>

                    <ul class="list__icons">
                        <li class="list__icon"> <img class="list__icon--image" src="assets/icons/cart_icon.svg" alt="winkelkarretje"> Eenvoudig bestellen</li>
                        <li class="list__icon"> <img class="list__icon--image" src="assets/icons/payment_icon.svg" alt="bankaart icoon"> Veilig betalen</li>
                        <li class="list__icon"> <img class="list__icon--image" src="assets/icons/truck_icon.svg" alt="truck icoon"> Gratis thuislevering vanaf &euro;20 </li>
                        <li class="list__icon"> <img class="list__icon--image" src="assets/icons/house_icon.svg" alt="huis icoon"> Levering in een winkel of bij je thuis</li>
                    </ul>
                </div>
            </article>

            <article class="product__description">
                <h4 class="product__description--title">Omschrijving</h4>
                <p class="product__description--text"><?php echo $product['description'];?></p>
            </article>

        </section>

</main>
