<?php
// src/Filme.php

class Filme
{
    private string $titulo;
    private string $genero;
    private int $ano;

    /* Método CONSTRUTOR: a finbalidade deste método é receber dados (através dos parâmetros) no momento da criação do objeto e atribuí-los às propriedades. Estemétodo NÃO POSSUI retorno. */
    /* .... _construct"(string $KKKK, string $vatapa)" => parâmetros */
    public function __construct(string $titulo, string $genero, int $ano)
    {
        // Atribuindo os valores recebidos pelos parâmetros
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->ano= $ano;
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

