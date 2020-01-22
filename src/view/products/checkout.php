<main class="main__detail">
 <a class="back" href="index.php?page=cart">&#60; terug</a>
 <ul class="checkout__nav">
   <li class="checkout__nav--item checkout__nav--item-active">1. Contact Gegevens</li>
   <li class="checkout__nav--item">2. Betaling</li>
   <li class="checkout__nav--item">3. Bevestiging</li>
 </ul>
 <section class="checkout">
   <h2 class="hidden">checkout</h2>
   <article class="checkout__article">
         <h3 class="hidden">Contact gegevens</h3>
         <fieldset class="checkout__form">
           <legend class="checkout__form--title bold">1. Contact gegevens</legend>
           <label class="checkout__form--label bold" for="">E-mail</label>
           <input class="checkout__form--input" type="text" placeholder="john.doe@email.com" size="20" required>
           <label class="checkout__form--label bold" for="">Voornaam + achternaam</label>
           <input class="checkout__form--input" type="text" placeholder="John Doe" size="20" required>

           <p class="checkout__form--subtitle bold">Adres</p>
           <label class="checkout__form--label" for="">Land</label>
           <input class="checkout__form--input"type="text" size="20" required>
           <label class="checkout__form--label" for="">Provincie/staat/region</label>
           <input class="checkout__form--input" type="text" size="20" required>

           <div class="checkout__form--wrapper">
           <label class="checkout__form--label label__margin" for="">Stad
           <input class="checkout__form--input"type="text" size="20" required></label>
           <label class="checkout__form--label" for="">Postcode
           <input class="checkout__form--input" type="text" maxlength="4" size="5" required></label>
           </div>

           <div class="checkout__form--wrapper">
           <label class="checkout__form--label label__margin" for="">Straat + nummer
           <input class="checkout__form--input"type="text" required></label>
           <label class="checkout__form--label" for="">Bus
           <input class="checkout__form--input"type="text" maxlength="4" size="5" required></label>
           </div>

           <label class="checkout__form--label bold" for="">GSM</label>
           <input class="checkout__form--input"type="text" placeholder="+32123456789" size="20" required>

         </fieldset>
   </article>
   <article class="checkout__article">
     <h3 class="hidden">overzicht bestelling</h3>
     <div class="overview__item">
     <p class="bold">Wool</p>
     <p>&euro;12.99</p>
     <a class="link__black" href="">x</a>
     </div>

     <div class="striped__line--detail"></div>
     <ul class="cart__total--items">
       <li class="cart__total--item bold">Totaal: <span class="total__item--price">&euro;12.99</span></li>
       <li class="cart__total--item bold">Verzendkosten: <span class="total__item--price">&euro;2.99</span></li>
       <li class="cart__total--item bold">Korting: <span class="total__item--price">&euro;4.99</span></li>
     </ul>
     <div class="striped__line--detail"></div>
     <p class="cart__total--items cart__total--item bold">Totaal: <span class="total__item--price">&euro;10.99</span></p>

   </article>

 </section>
 <article class="cart__total" >
   <h3 class="hidden">Totaal</h3>
     <div class="striped__line--detail"></div>
    <a class="cart__discount--button cart__total--button link__white" href="index.php?page=payment">Verder naar betalen ></a>
    </article>
</main>
