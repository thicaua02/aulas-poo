<?php

require_once "./src/Notificador.php";

require_once "./src/NotificadorEmail.php";

require_once "./src/NotificadorSMS.php";

$notificadorPorEmail = new NotificadorEmail();
$notificadorPorSMS =  new NotificadorSMS();

// Pedido 123abc

$emailPedido1 = $notificadorPorEmail->enviar("Seu pedido 123abc foi confirmado");
$smsPedido1 = $notificadorPorSMS->enviar("Seu pedido 123abc foi confirmado");

$emailPedido2 = $notificadorPorEmail->enviar("Seu pedido 987xyz foi confirmado");
$smsPedido2 = $notificadorPorSMS->enviar("Seu pedido 987xyz foi confirmado");

$emailPedido3 = $notificadorPorEmail->enviar("Seu pedido 567ghi foi confirmado");
$smsPedido3 = $notificadorPorSMS->enviar("Seu pedido 567ghi foi confirmado");

// Pedido

// *************

$notificadorPorEmailTeste2 = new NotificadorEmail();
$notificadorPorEmailTeste3 = new NotificadorEmail();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificações da loja virtual</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja virtual</p>
            <h1>Notificações da loja virtual</h1>
            <p>Simulações de notificações sobre pedidos por e-mail e SMS</p>
        </header>

        <div class="conteudos">

            <article class="card-conteudo">
                <h2>Notificações: Pedido 123abc</h2>
                <p><?= $emailPedido1 ?></p>
                <p><?= $smsPedido1 ?></p>
            </article>

            <article class="card-conteudo">
                <h2>Notificações: Pedido 987xyz</h2>
                <p><?= $emailPedido2 ?></p>
                <p><?= $smsPedido2 ?></p>
            </article>

            <article class="card-conteudo">
                <h2>Notificações: Pedido 567ghi</h2>
                <p><?= $emailPedido3 ?></p>
                <p><?= $smsPedido3 ?></p>
            </article>
        </div>

        <hr>

        <section class="card-conteudo">
            <h2>Resumo/Total dos envios de notificações</h2>
            <p>E-mails enviados: <b><?= NotificadorEmail::getQuantidadeEnviada(); ?></b></p>
            <p>SMS enviados: <b><?= NotificadorSMS::getQuantidadeEnviada(); ?></b></p>

        </section>

        <div class="assuntos-estudados">
            <li>Propriedade estática usando <b>static</b></li>
            <li>Métodos estáticos usando <b>static</b></li>
            <li>Acesso a recursos estáticos com <b>::</b></li>
            <li>Acesso a recursos estáticos da própria classe usando <b>self</b></li>
            <li>Diferença entre usar recursos estáticos de classe e recrusos de objeto.</li>
        </div>

    </div>
</body>

</html>