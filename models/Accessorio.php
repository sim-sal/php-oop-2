<?php

class Accessorio extends Prodotto
{

    private Categoria $categoria;
    private $tipologia;
    private $colore;
    private $materiale;

    public function __construct($nome, $immagine, $prezzo, Categoria $categoria, $tipologia, $colore, $materiale, $scorte)
    {
        // eredito le variabili "nome", "immagine", "prezzo" dalla classe madre
        parent::__construct($nome, $immagine, $prezzo, $scorte);

        $this->setCategoria($categoria);
        $this->setTipologia($tipologia);
        $this->setScorte($scorte);
        $this->setColore($colore);
        $this->setMateriale($materiale);
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

    // COLORE
    public function getColore()
    {
        return $this->colore;
    }
    public function setColore($colore)
    {
        $this->colore = $colore;
    }

    // MATERIALE
    public function getMateriale()
    {
        return $this->materiale;
    }
    public function setMateriale($materiale)
    {
        $this->materiale = $materiale;
    }
}
