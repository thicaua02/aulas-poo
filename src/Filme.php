<?php
// src/Filme.php

class Filme extends Conteudo {
    // Propriedade específica da classe Filme
    private int $duracao;

    // Método construtor específica da subclasse Filme
    // Responsável por receber os valores no momento da criação de objeto Filme (incluindo a duração)
    public function __construct(string $titulo, string $genero, int $ano, int $duracao) {
        /* Chamamos o construtor da superclasse (classe pai) usando parent::__construct().
        Isso é necessário pois estes valores pertecem às propriedades da classe pai.*/
        parent::__construct($titulo, $genero, $ano);
        $this->duracao = $duracao;
    }

    public function getDuracao() : int {
        return $this->duracao;
    }

    public function setDuracao(int $duracao) : void {
        $this->duracao = $duracao;
    }
}

?>