<main class="main__detail">
 <a class="back" href="index.php">&#60; terug</a>
 <section class="cart">
   <h2 class="hidden">Cart</h2>

   <article>
     <div class="cart__item">
       <div class="cart__title--image">
         <h3 class="cart__item--title">Wool <br> <span class="cart__item--author">Hugh Howey</span></h3>
         <img class="cart__item--image" src="/assets/books/wool.jpg" alt="" width="100">
       </div>
       <div class="cart__item--prices">
          <p class="cart__item--price">Paperback: &euro;12,99</p>
          <p class="cart__item--price book__discount">Korting: &euro;4;99</p>
          <p class="cart__item--price book__discount--text">U vindt de kortingcode op de flap rond Humo van die betreffende week</p>
       </div>
       <div class="">
         <input class="cart__item--quantity" type="number" placeholder="0">
       </div>
       <a class="cart__item--delete link__black" href="">x</a>
     </div>
     <div class="striped__line--cart"></div>
   </article>

   <article>
     <div class="cart__item">
       <div class="cart__title--image">
         <h3 class="cart__item--title">Wool <br> <span class="cart__item--author">Hugh Howey</span></h3>
         <img class="cart__item--image" src="/assets/books/wool.jpg" alt="" width="100">
       </div>
       <div class="cart__item--prices">
          <p class="cart__item--price">Paperback: &euro;12,99</p>
          <p class="cart__item--price book__discount">Korting: &euro;4;99</p>
          <p class="cart__item--price book__discount--text">U vindt de kortingcode op de flap rond Humo van die betreffende week</p>
       </div>
       <div class="">
         <input class="cart__item--quantity" type="number" placeholder="0">
       </div>
       <a class="cart__item--delete link__black" href="">x</a>
     </div>
     <div class="striped__line--cart"></div>
   </article>


   <article class="cart__discount">
     <h3 class="cart__discount--title">Gebruik de kortingscode</h3>
       <div class="cart__discount--add">
          <input class="cart__discount--input" type="text" placeholder="Code">
          <a class="cart__discount--button" href="">Toevoegen</a>
       </div>
     <a class="cart__discount--button" href="">+ nog een kortingscode</a>
   </article>

   <article class="cart__total" >
   <h3 class="hidden">Totaal</h3>
     <ul class="cart__total--items">
       <li class="cart__total--item bold">Totaal: <span class="total__item--price">&euro;12.99</span></li>
       <li class="cart__total--item bold">Verzendkosten: <span class="total__item--price">&euro;2.99</span></li>
       <li class="cart__total--item bold">Korting: <span class="total__item--price">&euro;4.99</span></li>
     </ul>
     <div class="striped__line--detail"></div>
     <p class="cart__total--items cart__total--item bold">Totaal: <span class="total__item--price">&euro;10.99</span></p>

    <a class="cart__discount--button cart__total--button link__white" href="index.php?page=checkout">Verder naar betalen ></a>
    </article>
 </section>
</main>
