<?php
// src/Serie.php

class Serie extends Conteudo {
    private int $temporadas;

    public function __construct(string $titulo, string $genero, int $ano, int $temporadas) {
        parent::__construct($titulo, $genero, $ano);
        $this->temporadas = $temporadas;
    }

    public function getTemporadas() : int {
        return $this->temporadas;
    }

    public function setTemporadas(int $temporadas) : void {
        $this->temporadas = $temporadas;
    }
}

?>