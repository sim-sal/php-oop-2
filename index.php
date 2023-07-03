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
    $prodottoCane1 = new ProdottoCane("osso", "ossoImg", 10, $categoriaCane, "giochi");
    var_dump($prodottoCane1);

    echo "<br><br>";

    // creo un prodotto per il gatto
    $prodottoGatto1 = new ProdottoGatto("collare", "collareImg", 5, $categoriaGatto, "accessori");
    var_dump($prodottoGatto1);
} catch (Exception $e) {
    echo "Errore nel prezzo: " . $e->getMessage();
}