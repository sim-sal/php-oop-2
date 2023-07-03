<?php

// classe "madre" dei prodotti
class Prodotto
{
    private $nome;
    private $immagine;
    private $prezzo;
    private $categoria;

    public function __construct($nome, $immagine, $prezzo, $categoria)
    {
        $this->nome = $nome;
        $this->immagine = $immagine;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
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
        $this->prezzo = $prezzo;
    }

    // CATEGORIA
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
}
