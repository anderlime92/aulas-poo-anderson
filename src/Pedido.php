<?php

class Pedido
{
    private int $numero;
    private string $cliente;

    /* $status é do tipo StatusPedido (a enumeração que criamos) e só aceitará as opções definidas nos cases */
    private StatusPedido $status;

    public function __construct(
        int $numero, string $cliente, StatusPedido $status
    )
    {
        $this->numero = $numero;
        $this->cliente = $cliente;
        $this->status = $status;
    }
    /* Programe os getters e setters para as 3 propriedades da classe */
}