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
                    <div class="product__price--wrapper">
                        <p class="book__price">&euro;<?php echo $product['price'];?></p>
                        <p class="book__discount">Korting: &euro;4,99</p>
                    </div>
                    <p class="book__ebook">E-book: &euro;1,99</p>
                    <fieldset class="filter__options">
                        <legend class="filter__label">
                            <input class="" type="radio" name="book" id="paperback"> <label class="filter__option"
                                for="paperback">Paperback &euro;12,99 </label>
                            <input class="" type="radio" name="book" id="e-book"><label class="filter__option"
                                for="e-book">E-book &euro;1,99</label>
                        </legend>
                    </fieldset>
                    <a class="cart__button cart__button--product" href=""> + In mijn winkelwagen <img
                            src="/assets/icons/cart_icon.svg" alt="voeg to in winkelmandje"></a>

                    <ul>
                        <li> <img src="/assets/icons/cart_icon.svg" alt="winkelkarretje"> Eenvoudig bestellen</li>
                        <li> <img src="/assets/icons/payment_icon.svg" alt="bankaart icoon"> Veilig betalen</li>
                        <li> <img src="/assets/icons/truck_icon.svg" alt="truck icoon"> Gratis thuislevering vanaf &euro;20 </li>
                        <li> <img src="/assets/icons/house_icon.svg" alt="huis icoon"> Levering in een winkel of bij je thuis</li>
                    </ul>
                </div>
            </article>

            <article class="product__description">
                <h4 class="product__description--title">Omschrijving</h4>
                <p class="product__description--text"><?php echo $product['description'];?></p>
            </article>

        </section>

</main>
