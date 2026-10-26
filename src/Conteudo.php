<?php
abstract class Conteudo {
    protected string $titulo;
    protected string $genero;
    protected int $ano;

    public function __construct(string $titulo, string $genero, int $ano) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->ano = $ano;
    }

    public function ehClassico() : bool {
        return $this->ano < 2000;
    }

    public function getTitulo() : string {
        return $this->titulo;
    }

    public function getGenero () : string {
        return $this->genero;
    }

    public function getAno () : int {
        return $this->ano;
    }

    public function setTitulo (string $titulo) : void {
        $this->titulo = $titulo;
    }
    public function setGenero (string $genero) : void {
        $this->genero = $genero;
    }
    public function setAno (string $ano) : void {
        if ($ano > 0) {
            $this->ano = $ano;
        }
    }
}

?>