<?php

require_once("./models/Prodotto.php");
require_once("./models/Categoria.php");
require_once("./models/ProdottoCane.php");
require_once("./models/ProdottoGatto.php");

try {
    // aggiungiamo le due categorie nella classe Categoria
    $categoriaCane = new Categoria("Cane");
    $categoriaGatto = new Categoria("Gatto");

    // creo un prodotto per il cane
    $prodottoCane1 = new ProdottoCane("Scatoletta di pollo", "https://m.media-amazon.com/images/I/71nSzTZ+kHL._AC_SL1500_.jpg", 13.86, $categoriaCane, "Cibo");
    $prodottoCane2 = new ProdottoCane("Lava zampe", "https://m.media-amazon.com/images/I/81RghwxB42L._AC_SL1500_.jpg", 14.99, $categoriaCane, "Accessori");
    $prodottoCane3 = new ProdottoCane("Tiro alla fune", "https://m.media-amazon.com/images/I/812HiDaUXYL._AC_SL1500_.jpg", 11.99, $categoriaCane, "Giochi");

    $prodottoCane = [$prodottoCane1, $prodottoCane2, $prodottoCane3];

    // creo un prodotto per il gatto
    $prodottoGatto1 = new ProdottoGatto("collare", "collareImg", 5, $categoriaGatto, "accessori");
} catch (Exception $e) {
    echo "Errore nel prezzo: " . $e->getMessage();
}
