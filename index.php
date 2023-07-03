<?php

require_once("./models/Prodotto.php");

$prodotto1 = new Prodotto("osso", "immagineOsso", 8, "cane");
var_dump($prodotto1);
