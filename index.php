<?php
// Importando a classe
require_once "src/Conteudo.php";
require_once "src/Filme.php";
require_once "src/Serie.php";

// Criando um OBJETO ou uma INSTÂNCIA a partir da classe Filme
$filme1 = new Filme("Interestelar", "Ficção Científica", 2014, 100);
$filme2 = new Filme("Toy Story", "Aventura", 1995, 100);
$filme3 = new Filme("Os Vingadores", "Super-herói", 2012, 100);
$serie1 = new Serie("Hora de Aventura", "Fantasia", 1999, 9);
$serie2 = new Serie("The flash", "Ação", 2012, 10);

//$filmes = [$filme1, $filme2, $filme3];
//$series = [$serie1, $serie2];

/* Como a classe Conteudo foi definida como abstrata, a linha abaixo não
funcionará pois não é possível criar objetos/instãncias diretamente à partir
de classes abstratas. */
// $conteudo = new Conteudo ("Senhor dos aneis", "Fantasia", 2001);
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
                    <span class="genero"><?= $conteudo->getGenero() ?></span>
                    <h2> <?= $conteudo->getTitulo() ?></h2>
                    <p class="ano">Lançamento: <?= $conteudo->getAno() ?></p>

                    <p><?= $conteudo->getDescricao() ?></p>

                    <?php if($conteudo->ehClassico()): ?>
                        <span class="classico">Classico</span>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Classe Abstrata: <b>Conteudo</b></li>
                <li>Método Abstrato: <b>getDescricao()</b></li>
                <li>Impossibilidade de instanciar diretamente uma classe abstrata</li>
                <li>Obriga a implementação do método abstrato pelas classes filhas Filme
                e Serie</li>
                <li>Polimorfismo: a mesma chamada a <b>getDescricao()</b> utiliza a 
                implementação de cada classe</li>
            </ul>
        </div>

    </div>
</body>

</html>