<?php
/* Cada case representa um status permitido e possui um valor texto associado, que você pode escrever como quiser (acentos, espaços, cedilha, "etc") */
enum StatusPedido: string
{
    case Pendente = "Pendente";
    case AguardandoPagamento = "AguardandoPagamento";
    case Pago = "Pago";
    case EmPreparacao = "Em preparação";
    case SaiuParaEntrega = "Saiu para entrega";
}
