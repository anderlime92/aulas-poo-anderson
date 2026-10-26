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

/* echo "<pre>";
var_dump($serie1, $serie2);
echo "</pre>"; */

/* Como a classe Conteudo foi definida como abstrata, a linha abaixo não funcionará pois não é possível criar objetos/instâncias diretamente à partir de classes abstratas. */
// $conteudo = new Conteudo('Senhor dos anéis', 'Fantasia', 2001);
// var_dump($conteudo);

// Lista com objetos Filme e Serie
$conteudos = [$filme1, $filme2, $serie1, $serie2];
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

        <div class="conteudos">
            <?php foreach ($conteudos as $conteudo): ?>
                <article class="card-conteudo">
                    <span class="genero"> <?= $conteudo->getGenero() ?> </span>
                    <h2> <?= $conteudo->getTitulo() ?> </h2>

                    <p class="ano">Lançamento: <?= $conteudo->getAno() ?> </p>

                    <!-- POLIMORFISMO: a mesma chamada (getDescrição) de método, mas usando implementações diferentes -->
                    <p> <?= $conteudo->getDescricao() ?> </p>

                    <?php if ($conteudo->ehClassico()): ?>
                        <span class="classico">Clássico</span>

                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>

        <hr>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Classe abstrata: <b>Conteudo</b></li>
                <li>Impossibilidade de instanciar diretamente uma classe abstrata</li>
                <li>Método abstrato: <b>getDescricao()</b></li>
                <li>Obriga a implementação do método abstrato pelas classes filhas Filme e Serie</li>
                <li>Polimorfismo: a mesma chamada a <b>getDescricao()</b> utiliza a implementação de cada classe</li>
            </ul>
        </div>

    </div>
</body>

</html>