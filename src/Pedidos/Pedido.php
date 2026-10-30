<?php

namespace App\Pedidos;

class Pedido
{
    private int $numero;
    private string $cliente;

    /* $status é do tipo StatusPedido (a enumeração que criamos) 
    e só aceitará as opções definidas nos cases*/
    private StatusPedido $status;

    public function __construct(int $numero, string $cliente, StatusPedido $status) {
        $this->numero = $numero;
        $this->cliente = $cliente;
        $this->status = $status;   
    }

    public function getNumero() : int {
        return $this->numero;
    }

    public function getCliente() : string {
        return $this->cliente;
    }

    public function getStatus() : StatusPedido {
        return $this->status;
    }

    public function setNumero(int $novoNumero) : void {
        $this->numero = $novoNumero;
    }

    public function setCliente(string $novoCliente) : void {
        $this->cliente = $novoCliente;
    }

    public function setStatus(StatusPedido $status) : void {
        $this->status = $status;
    }
}