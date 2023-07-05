<?php

require_once("./models/Prodotto.php");
require_once("./models/Categoria.php");
require_once("./models/Cibo.php");
require_once("./models/Accessorio.php");
require_once("./models/Gioco.php");

try {
    // aggiungiamo le due categorie nella classe Categoria
    $categoriaCane = new Categoria('<i class="fa-solid fa-dog"></i>');
    $categoriaGatto = new Categoria('<i class="fa-solid fa-cat"></i>');

    // PRODOTTI PER IL CANE
    // creo un prodotto cibo
    $ciboCane1 = new Cibo("Cesar 'Pollo&Manzo'", "https://m.media-amazon.com/images/I/71nSzTZ+kHL._AC_SL1500_.jpg", 13.86, $categoriaCane, "Cibo", 150, "04 / 07 / 2024", 10);
    // creo un prodotto accessorio
    $accessorioCane1 = new Accessorio("Lava zampe", "https://m.media-amazon.com/images/I/81RghwxB42L._AC_SL1500_.jpg", 14.99, $categoriaCane, "Accessori", 22);
    // creo un prodotto gioco
    $giocoCane1 = new Gioco("Tiro alla fune", "https://m.media-amazon.com/images/I/812HiDaUXYL._AC_SL1500_.jpg", 11.99, $categoriaCane, "Giochi", 18);


    // PRODOTTI PER IL GATTO
    // creo un prodotto cibo
    $ciboGatto1 = new Cibo("Purina Gourmet", "https://m.media-amazon.com/images/I/71gabeunxzL._AC_SL1500_.jpg", 17.49, $categoriaGatto, "Cibo Umido", 85, "09 / 10 / 2023", 26);
    // creo un prodotto accessorio
    $accessorioGatto1 = new Accessorio("Lettiera", "https://m.media-amazon.com/images/I/71h5k6tT2qL._AC_SL1500_.jpg", 24.99, $categoriaGatto, "Accessori", 26);
    // creo un prodotto gioco
    $giocoGatto1 = new Gioco("Palla Interattiva", "https://m.media-amazon.com/images/I/61nbqP3EE9L._AC_SL1500_.jpg", 11.69, $categoriaGatto, "Giochi", 12);

    // inseriamo i prodotti di entrambe le categorie in un unico array
    $prodotti = [$ciboCane1, $accessorioCane1, $giocoCane1, $ciboGatto1, $accessorioGatto1, $giocoGatto1];
} catch (Exception $e) {
    echo "Errore nel prezzo: " . $e->getMessage();
}
