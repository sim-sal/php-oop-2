<?php

class ProdottoGatto extends Prodotto
{
    private Categoria $categoria;
    private $tipologia;

    public function __construct($nome, $immagine, $prezzo, Categoria $categoria, $tipologia)
    {
        // eredito le variabili "nome", "immagine", "prezzo" dalla classe madre
        parent::__construct($nome, $immagine, $prezzo);

        $this->setCategoria($categoria);
        $this->setTipologia($tipologia);
    }

    // recuperiamo i valori delle variabili in lettura e in scrittura

    // CATEGORIA
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    // TIPOLOGIA
    public function getTipologia()
    {
        return $this->tipologia;
    }
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;
    }
}
