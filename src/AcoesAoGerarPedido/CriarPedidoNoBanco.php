<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Salvando pedido no banco de dados";
    }
}
