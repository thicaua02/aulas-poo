<?php
// Importando a classe
require_once "src/Conteudo.php";
require_once "src/Filme.php";
require_once "src/Serie.php";

// Criando um OBJETO ou uma INSTÂNCIA a partir da classe Filme
$filme1 = new Filme("Interestelar", "Ficção Científica", 2014, 100);
$filme2 = new Filme("Toy Story", "Aventura", 1995, 100);
$filme3 = new Filme("Os Vingadores", "Super-herói", 2012, 100);
$serie1 = new Serie("Hora de Aventura", "Fantasia", 2000, 9);
$serie2 = new Serie("The flash", "Ação", 2012, 10);

echo "<pre>";
var_dump($serie1, $serie2);
echo "</pre>";
$filmes = [$filme1, $filme2, $filme3];
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
            <?php foreach ($filmes as $filme): ?>
                <article class="card-filme">
                    <span class="genero"><?= $filme->getGenero() ?></span>
                    <h2> <?= $filme->getTitulo() ?></h2>
                    <p class="ano">Lançamento: <?= $filme->getAno() ?></p>

                    <?php if($filme->ehClassico()): ?>
                        <span class="classico">Classico</span>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                
            </ul>
        </div>

    </div>
</body>

</html>