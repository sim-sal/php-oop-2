<?php

class Categoria
{
    private $nomeCategoria;

    public function __construct($nomeCategoria)
    {
        $this->setNomeCategoria($nomeCategoria);
    }

    // recuperiamo i valori delle variabili in lettura e in scrittura

    // NOME CATEGORIA
    public function getNomeCategoria()
    {
        return $this->nomeCategoria;
    }
    public function setNomeCategoria($nomeCategoria)
    {
        $this->nomeCategoria = $nomeCategoria;
    }
}
