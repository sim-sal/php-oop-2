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
            <!-- creo le card per i prodotti  -->
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                <?php foreach ($prodotti as $prod) { ?>
                    <div class="col-md-4 ms-md-3 card_prod">
                        <div class="category">
                            <span>Categoria: <?php echo $prod->getCategoria()->getNomeCategoria(); ?></span>
                        </div>

                        <h2><?php echo $prod->getNome(); ?></h2>
                        <img class="img_prod" src="<?php echo $prod->getImmagine(); ?>" alt="">
                        <h5>Prezzo: <?php echo $prod->getPrezzo(); ?><i class="fa-solid fa-euro-sign"></i></h5>
                        <div class="row info_prod">
                            <div class="col-6">
                                <span>Tipologia: <span class="type"><?php echo $prod->getTipologia(); ?></span></span>
                            </div>
                            <div class="col-6">
                                <span>Disponibilità: <span class="scorte"><?php echo $prod->getScorte(); ?></span></span>
                            </div>
                            <div class="col-6">
                                <?php
                                if ($prod->getTipologia() == "Cibo") {
                                    echo "Peso: " . $prod->getPeso() . "g";
                                } elseif ($prod->getTipologia() == "Accessori") {
                                    echo "Colore: " . $prod->getColore();
                                }
                                ?>
                            </div>
                            <div class="col-6">
                                <?php
                                if ($prod->getTipologia() == "Cibo") {
                                    echo "Scadenza: <br>" . $prod->getScadenza();
                                } elseif ($prod->getTipologia() == "Accessori") {
                                    echo "Materiale: <br>" . $prod->getMateriale();
                                } elseif ($prod->getTipologia() == "Giochi") {
                                    echo "Marchio: <br>" . $prod->getMarchio();
                                }
                                ?>
                            </div>

                        </div>
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

    .info_prod {
        margin-bottom: 10px;
    }

    .type {
        font-style: italic;
        font-weight: bold;
    }

    .scorte {
        font-weight: bold;
        background-color: black;
        color: white;
        padding: 5px;
        border-radius: 20px;
    }
</style>

</html>