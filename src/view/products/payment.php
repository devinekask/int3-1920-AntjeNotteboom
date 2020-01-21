<main class="main__detail">
 <a class="back" href="index.php?page=checkout">&#60; terug</a>
 <ul class="checkout__nav">
   <li class="checkout__nav--item checkout__nav--item-active">1. Contact Gegevens</li>
   <li class="checkout__nav--item checkout__nav--item-active">2. Betaling</li>
   <li class="checkout__nav--item">3. Bevestiging</li>
 </ul>
 <section class="checkout">
   <h2 class="hidden">Payment</h2>
   <article class="checkout__article">
         <h3 class="checkout__form--title bold">2. Betaling</h3>
         <fieldset class="checkout__form">
           <legend class="payment__form--legend bold">Kies je betaling</legend>
           <label class="payment__label" for="bancontact">
             <input class="payment__input" type="radio" name="payment" id="bancontact"> <span>Bancontact</span> </label>
            <label class="payment__label" for="creditcard">
              <input class="payment__input" type="radio" name="payment" id="creditcard"> <span>Creditcard</span> </label>
              <label class="payment__label" for="paypal">
             <input class="payment__input" type="radio" name="payment" id="paypal"> <span>PayPal</span> </label>
            <label class="payment__label" for="achteraf">
              <input class="payment__input" type="radio" name="payment" id="achteraf"> <span>Achteraf Betalen</span> </label>

            </legend>
         </fieldset>
   </article>

 </section>
 <article class="cart__total" >
   <h3 class="hidden">Totaal</h3>
     <div class="striped__line--detail"></div>
    <a class="cart__discount--button cart__total--button link__white" href="index.php?page=message">Verder naar betalen ></a>
    </article>
</main>
