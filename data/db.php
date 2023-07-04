<?php

require_once("./models/Prodotto.php");
require_once("./models/Categoria.php");
require_once("./models/ProdottoCane.php");
require_once("./models/ProdottoGatto.php");

try {
    // aggiungiamo le due categorie nella classe Categoria
    $categoriaCane = new Categoria('<i class="fa-solid fa-dog"></i>');
    $categoriaGatto = new Categoria('<i class="fa-solid fa-cat"></i>');

    // creo un prodotto per il cane
    $prodottoCane1 = new ProdottoCane("Scatoletta di pollo", "https://m.media-amazon.com/images/I/71nSzTZ+kHL._AC_SL1500_.jpg", 13.86, $categoriaCane, "Cibo");
    $prodottoCane2 = new ProdottoCane("Lava zampe", "https://m.media-amazon.com/images/I/81RghwxB42L._AC_SL1500_.jpg", 14.99, $categoriaCane, "Accessori");
    $prodottoCane3 = new ProdottoCane("Tiro alla fune", "https://m.media-amazon.com/images/I/812HiDaUXYL._AC_SL1500_.jpg", 11.99, $categoriaCane, "Giochi");

    $prodottoCane = [$prodottoCane1, $prodottoCane2, $prodottoCane3];

    // creo un prodotto per il gatto
    $prodottoGatto1 = new ProdottoGatto("Lettiera", "https://m.media-amazon.com/images/I/71h5k6tT2qL._AC_SL1500_.jpg", 24.99, $categoriaGatto, "Accessori");
    $prodottoGatto2 = new ProdottoGatto("Purina Gourmet", "https://m.media-amazon.com/images/I/71gabeunxzL._AC_SL1500_.jpg", 17.49, $categoriaGatto, "Cibo Umido");
    $prodottoGatto3 = new ProdottoGatto("Palla Interattiva", "https://m.media-amazon.com/images/I/61nbqP3EE9L._AC_SL1500_.jpg", 11.69, $categoriaGatto, "Giochi");

    $prodottoGatto = [$prodottoGatto1, $prodottoGatto2, $prodottoGatto3];
} catch (Exception $e) {
    echo "Errore nel prezzo: " . $e->getMessage();
}
