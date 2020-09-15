<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Allura\DesignPattern\Orcamento;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Um orçamento finalizado não pode receber desconto');
    }

}

