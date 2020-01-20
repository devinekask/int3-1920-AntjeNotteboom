<main class="main__cart">
 <a class="back" href="index.php">&#60; terug</a>
 <section class="cart">
   <h2>Cart</h2>

   <?php foreach($_SESSION['cart'] as $product){
      $itemTotal = $item['product']['price'] * $item['quantity'];
      $total += $itemTotal; ?>
   <article class="cart__item">
     <h3>Wool <br> <span>Hugh Howey</span></h3>
     <img src="<?php echo $product['image'];?>" alt="">
     <div>
     <p>Paperback: &euro;12,99</p>
     <p>Korting: &euro;4;99</p>
     <p>korting verkrgijbaar</p>
     </div>
     <div>
       <input type="text">
     </div>
     <p>x</p>
   </article>
   <?php
          }
          ?>

   <article>
     <h3>Gebruik de kortingscode</h3>

     <input type="text">
     <a href="">Toevoegen</a>
     <a href="">+ nog een kortingscode</a>
   </article>
   <article>
     <h3 class="hidden">totaal</h3>
   </article>
 </section>
</main>
