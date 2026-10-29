<?php

require_once "./src/Notificador.php";
require_once "./src/NotificadorEmail.php";
require_once "./src/StatusPedido.php"; // a Enumeração DEVE vir primeiro
require_once "./src/Pedido.php"; // pois a classe Pedido precisa dela

$notificadorPorEmail = new NotificadorEmail();
$pedido1 = new Pedido(1000, "Fulano da Silva", StatusPedido::Pendente);
$pedido2 = new Pedido(1001, "Beltrano Souza", StatusPedido::Pendente);
$pedido3 = new Pedido(1004, "José da Silva", StatusPedido::AguardandoPagamento);
$pedido4 = new Pedido(1005, "Mônica Santos", StatusPedido::SaiuParaEntrega);

$pedidos = [
    $pedido1, 
    $pedido2, 
    $pedido3, 
    $pedido4
];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos da loja virtual</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja virtual</p>
            <h1>Loja virtual</h1>
            <p>Cada pedido possui um status: Pendente, Aguardando pagamento, Em progresso Ou Saiu para entegra</p>
        </header>

        <div class="conteudos">
            <?php foreach ($pedidos as $pedido): ?>
                <article class="card-conteudo">
                    <h2>Pedido #<?= $pedido->getNumero() ?></h2>
                    <p>Cliente: <?= $pedido->getCliente() ?></p>
                    <p>Status: 
                        <b class="destaque"> <?= $pedido->getStatus()->value ?></b>
                    </p>
                </article>
            <?php endforeach; ?>
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