<?php

// classe "madre" dei prodotti
class Prodotto
{
    private $nome;
    private $immagine;
    private $prezzo;

    public function __construct($nome, $immagine, $prezzo)
    {
        $this->setNome($nome);
        $this->setImmagine($immagine);
        $this->setPrezzo($prezzo);
    }

    // recuperiamo i valori delle variabili in lettura e in scrittura

    // NOME
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    // IMMAGINE
    public function getImmagine()
    {
        return $this->immagine;
    }
    public function setImmagine($immagine)
    {
        $this->immagine = $immagine;
    }

    // PREZZO
    public function getPrezzo()
    {
        return $this->prezzo;
    }
    public function setPrezzo($prezzo)
    {
        if ($prezzo <= 0) {
            throw new Exception("Il valore del PREZZO deve essere maggiore di 0!");
        }
        $this->prezzo = $prezzo;
    }
}
