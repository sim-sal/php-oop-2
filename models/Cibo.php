<?php

class Cibo extends Prodotto
{
    private Categoria $categoria;
    private $tipologia;
    private $peso;
    private $scadenza;

    public function __construct($nome, $immagine, $prezzo, Categoria $categoria, $tipologia, $peso, $scadenza, $scorte)
    {
        // eredito le variabili "nome", "immagine", "prezzo" dalla classe madre
        parent::__construct($nome, $immagine, $prezzo, $scorte);

        $this->setCategoria($categoria);
        $this->setTipologia($tipologia);
        $this->setPeso($peso);
        $this->setScadenza($scadenza);
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

    // PESO
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    // SCADENZA
    public function getScadenza()
    {
        return $this->scadenza;
    }
    public function setScadenza($scadenza)
    {
        $this->scadenza = $scadenza;
    }
}
