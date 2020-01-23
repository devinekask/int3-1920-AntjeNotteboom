<main class="main__detail">

 <a class="back" href="index.php">&#60; terug</a>
 <section class="cart">
   <h2 class="hidden">Cart</h2>

   <?php
    $total = 0;
    foreach($_SESSION['cart'] as $product) {
      $productTotal = $product['product']['price'] * $product['quantity'];
      $total += $productTotal;
   ?>
   <article class="article__cart--item">
     <div class="cart__item">
       <div class="cart__title--image">
         <h3 class="cart__item--title"><?php echo $product['product']['title'];?> <br> <span class="cart__item--author"><?php echo $product['product']['author'];?></span></h3>
         <img class="cart__item--image" src="<?php echo $product['product']['image'];?>" alt="<?php echo $product['product']['title'];?>" width="100">
       </div>
       <div class="cart__item--prices">
          <p class="cart__item--price">Paperback: &euro;<?php echo money_format("%i", $product['product']['price']);?></p>
          <input class="cart__item--quantity" type="text" name="quantity[<?php echo $product['product']['id'];?>]" value="<?php echo $product['quantity'];?>">
       </div>

       <div class="cart__item--delete link__black">
        <button class="cart__item--delete link__black btn" type="submit" name="remove" value="<?php echo $product['product']['id'];?>">x</button>
       </div>

     </div>
     <div class="striped__line--cart"></div>
   </article>
   <?php
    }
   ?>

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
       <li class="cart__total--item bold">Totaal: <span class="total__item--price">&euro;<?php echo money_format("%i", $total - 2);?></span></li>
       <li class="cart__total--item bold">Verzendkosten: <span class="total__item--price">&euro;2.99</span></li>
       <li class="cart__total--item bold">Korting: <span class="total__item--price">&euro;4.99</span></li>
     </ul>
     <div class="striped__line--detail"></div>
     <p class="cart__total--items cart__total--item bold">Totaal: <span class="total__item--price">&euro;<?php echo money_format("%i", $total);?></span></p>

    <a class="cart__discount--button cart__total--button link__white" href="index.php?page=checkout">Verder naar betalen ></a>
    </article>
 </section>
</main>
