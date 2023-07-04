<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- importiamo il database -->
    <?php
    require_once("./data/db.php");
    ?>

    <!-- importo font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- importo bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


    <title>Pets shop</title>
</head>

<body>
    <main>
        <div class="container text-center">
            <!-- creo le card per i prodotti del cane -->
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                <?php foreach ($prodottoCane as $prod) { ?>
                    <div class="col-md-4 ms-md-3 card_prod">
                        <div class="category">
                            <span>Categoria: <?php echo $prod->getCategoria()->getNomeCategoria(); ?></span>
                        </div>

                        <h2><?php echo $prod->getNome(); ?></h2>
                        <img class="img_prod" src="<?php echo $prod->getImmagine(); ?>" alt="">
                        <h5>Prezzo: <?php echo $prod->getPrezzo(); ?><i class="fa-solid fa-euro-sign"></i></h5>
                        <span>Tipologia: <?php echo $prod->getTipologia(); ?></span>
                    </div>
                <?php } ?>
            </div>

            <!-- creo le card per i prodotti del gatto -->
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                <?php foreach ($prodottoGatto as $prod) { ?>
                    <div class="col-md-4 ms-md-3 card_prod">
                        <div class="category">
                            <span>Categoria: <?php echo $prod->getCategoria()->getNomeCategoria(); ?></span>
                        </div>

                        <h2><?php echo $prod->getNome(); ?></h2>
                        <img class="img_prod" src="<?php echo $prod->getImmagine(); ?>" alt="">
                        <h5>Prezzo: <?php echo $prod->getPrezzo(); ?><i class="fa-solid fa-euro-sign"></i></h5>
                        <span>Tipologia: <?php echo $prod->getTipologia(); ?></span>
                    </div>
                <?php } ?>
            </div>

        </div>

    </main>

</body>

<style>
    /* regole generali */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .row {
        justify-content: space-between;
        margin-top: 10px;
    }

    .img_prod {
        max-width: 170px;
    }

    .card_prod {
        border: 2px solid black;
        border-radius: 10px;
    }

    .category {
        border-bottom: 1px solid black;
    }
</style>

</html>