<?php
// src/Serie.php

// Serie é uma subclasse que HERDA da superclasse Conteudo
class Serie extends Conteudo
{
    /* Mini-exercícios */

    // 1) Adicione uma propriedade específica da Serie: temporadas
    private int $temporada;

    // 2) Programe o uso dos construtores considerando superclasse e subclasse
    public function __construct(string $titulo, string $genero, int $ano, int $temporada)
    {
        // Chama o construtor da superclasse/pai Conteudo e repassa os valores pra ela
        parent::__construct($titulo, $genero, $ano);

        // Atribui o valor à propriedade da subclasse filha/Serie
        $this->temporada = $temporada;
    }

    // 3) Faça getter/setter para esta propriedade (temporadas)
    public function getTemporada(): int
    {
        return $this->temporada;
    }

    public function setTemporada(int $temporada): void
    {
        $this->temporada = $temporada;
    }

    // 4) (na index.php) Crie dois objetos do tipo Serie
    // 5) (na index.php) Mostre estes dois objetos usando var_dump

    public function getDescricao(): string
    {
        return "A série $this->titulo possui $this->temporada temporadas.";
    }
}