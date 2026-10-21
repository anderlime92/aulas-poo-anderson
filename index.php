<?php
// Importando a superclasse/pai: Conteudo
require_once "src/Conteudo.php";

// Importando a subclasse/filha: Filme (que herda de Conteudo)
require_once "src/Filme.php";

// Importando a subclasse/filha: Serie (que herda de Conteudo)
require_once "src/Serie.php";

// Criando os objetos e passando os dados para o construtor
$filme1 = new Filme('De Volta para o Futuro', 'Ficção', 1985, 114);

$filme2 = new Filme('Toy Story', 'Animação', 1995, 96);

$filme3 = new Filme('Homem Aranha 2', 'Ação', 2006, 220);

$filme4 = new Filme('Matrix', 'ficção', 1999, 160);

$serie1 = new Serie('Twin Peaks', 'ficção', 1990, 3);

$serie2 = new Serie('Dark', 'ficção', 2017, 3);

/* echo "<pre>";
var_dump($filme1, $filme2, $filme3, $filme4);
echo "</pre>"; */

echo "<pre>";
var_dump($serie1, $serie2);
echo "</pre>";

$series = [$serie1, $serie2];

$filmes = [$filme1, $filme2, $filme3, $filme4];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Coleção de Filmes</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Uma sessão de boas histórias</p>
            <h1>Minha coleção de filmes</h1>
            <p>Três filmes para descobrir, rever e se divertir</p>
        </header>

        <div class="filmes">
        <?php foreach($filmes as $filme): ?>
            <article class="card-filme">
               <span class="genero"> <?= $filme->getGenero() ?> </span>
               <h2> <?= $filme->getTitulo() ?> </h2>
               <p class="ano">Lançamento: <?= $filme->getAno() ?> </p>

               <?php if( $filme->ehClassico() ): ?>
                <span class="classico">Clássico</span>
               <?php endif; ?>
            </article>
        <?php endforeach; ?>
        </div>

        <hr>

        <div class="series">
        <?php foreach($series as $serie): ?>
            <article class="card-serie">
               <span class="genero"> <?= $serie->getGenero() ?> </span>
               <h2> <?= $serie->getTitulo() ?> </h2>
               <p class="ano">Lançamento: <?= $serie->getAno() ?> </p>

               <?php if( $serie->ehClassico() ): ?>
                <span class="classico">Clássico</span>
               <?php endif; ?>
            </article>
        <?php endforeach; ?>
        </div>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li></li>
                <li><b></b></li>
                <li></li>
                <li></li>
                <li></li>
                <li><b></b></li>
            </ul>
        </div>

    </div>
</body>

</html>