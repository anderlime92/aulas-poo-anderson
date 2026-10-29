<?php
require_once "src/Notificador.php";
require_once "src/NotificadorEmail.php";
require_once "src/NotificadorSMS.php";

$notificadorPorEmail = new NotificadorEmail();
$notificadorPorSMS = new NotificadorSMS();

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
            <p class="destaque">Loja Virtual</p>
            <h1>Pedidos da loja virtual</h1>
            <p>Cada pedido possui um status: Pendente, Aguardando pagamento, </p>
        </header>

        <div class="conteudos">
            <article class="card-conteudo">
                <h2></h2>
                <p></p>
                <p></p>
            </article>

            <hr>

        </div>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

    </div>
</body>

</html>