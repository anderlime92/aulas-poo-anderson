<?php
// src/Conteudo.php

class Conteudo
{
    private string $titulo;
    private string $genero;
    private int $ano;

    public function __construct(string $titulo, string $genero, int $ano)
    {
        // Atribuindo os valores recebidos pelos parâmetros às propriedades
        $this->titulo = $titulo;
        $this->genero = $genero;
        // $this->ano= $ano;
        //Dica: podemos (ou, dependendo do caso, devemos) usar os setters através do construtor
        $this->setAno($ano);
    }

    public function ehClassico(): bool
    {
        return $this->ano < 2000;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setGenero(string $genero): void
    {
        $this->genero = $genero;
    }

    public function setAno(int $ano): void
    {
        if ($ano > 0) {
            $this->ano = $ano;
        }
    }
}
