<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Boek-it</title>
</head>

<body>
   
    <main class="main__winkel">
        <h2 class="winkel__title">Onze Winkel</h2>
        <article class="highlight">
            <div class="highlight__wrapper">
                <h3 class="highlight__title">Highlight van de week:</h3>
                <p class="highlight__book">Wool - Hugh Howey</p>
                <p class="highlight__text">Lees de <a class="highlight__link" href="">longread</a> of koop het boek <a
                        class="cart__button" href=""><img src="../boekit/assets/Cart_symbol.svg"
                            alt="voeg to in winkelmandje"></a></p>
            </div>
            <img class="highlight__img" src="../boekit/assets/books/wool boek.jpg" alt="boek cover van Wool" width=""
                height="">
        </article>
        <div class="filter">
            <fieldset class="filter__options">
                <legend class="filter__label">Filter:
                    <input class="" type="radio" name="filter" id="boeken"> <label class="filter__option"
                        for="boeken">Boeken</label>
                    <input class="" type="radio" name="filter" id="extra"><label class="filter__option"
                        for="extra">Extra</label>
                    <input class="" type="radio" name="filter" id="abonnement"><label class="filter__option"
                        for="abonnement">Abonnement</label>
                </legend>
            </fieldset>
            <input type="submit" class="filter__button" href="../src/extra.html" value="Filter">
        </div>
        <section class="section books">
            <h3 class="section__title">Boeken</h3>
            <div class="section__wrapper">
                <article class="book">
                    <a class="link__black" href="../boekit/detail.html">
                        <div class="book__image--wrapper">
                            <h4 class="book__title"><span class="book__author">Hugh Howey</span> <br> Wool</h4>
                            <img class="book__image" src="../boekit/assets/books/wool boek.jpg"
                                alt="boek cover van Wool">
                        </div>
                    </a>
                    <div class="book__price--wrapper">
                        <p class="book__price">€12,99</p>
                        <p class="book__discount">Korting: €4,99</p>
                        <p class="book__ebook">E-book: €1,99</p>
                        <a class="cart__button cart__button--book" href=""><img src="../boekit/assets/Cart_symbol.svg"
                                alt="voeg to in winkelmandje"></a>
                    </div>
                </article>
                <article class="book">
                    <a class="link__black" href="../boekit/detail.html">
                        <div class="book__image--wrapper">
                            <h4 class="book__title"><span class="book__author">Hugh Howey</span> <br> Wool</h4>
                            <img class="book__image" src="../boekit/assets/books/wool boek.jpg"
                                alt="boek cover van Wool">
                        </div>
                    </a>
                    <div class="book__price--wrapper">
                        <p class="book__price">€12,99</p>
                        <p class="book__discount">Korting: €4,99</p>
                        <p class="book__ebook">E-book: €1,99</p>
                        <a class="cart__button cart__button--book" href=""><img src="../boekit/assets/Cart_symbol.svg"
                                alt="voeg to in winkelmandje"></a>
                    </div>
                </article>
                <article class="book">
                    <a class="link__black" href="../boekit/detail.html">
                        <div class="book__image--wrapper">
                            <h4 class="book__title"><span class="book__author">Hugh Howey</span> <br> Wool</h4>
                            <img class="book__image" src="../boekit/assets/books/wool boek.jpg"
                                alt="boek cover van Wool">
                        </div>
                    </a>
                    <div class="book__price--wrapper">
                        <p class="book__price">€12,99</p>
                        <p class="book__discount">Korting: €4,99</p>
                        <p class="book__ebook">E-book: €1,99</p>
                        <a class="cart__button cart__button--book" href=""><img src="../boekit/assets/Cart_symbol.svg"
                                alt="voeg to in winkelmandje"></a>
                    </div>
                </article>
            </div>
        </section>
        <section class="section extra">
            <h3 class="section__title">Extra's</h3>
        </section>
        <section class="section abonnement">
            <h3 class="section__title">Abonnement</h3>
        </section>

    </main>
</body>

</html>
