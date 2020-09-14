<?php

namespace Alura\DesignPattern;

class Orcamento
{
    public float $valor;
    public int $quantidadeItens;
    public string $estadoAtual;

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra();
    }

    public function calculaDescontoExtra(): float
    {
        if ($this->estadoAtual == 'EM_APROVACAO') {
            return $this->valor * 0.05;
        }

        if ($this->estadoAtual == 'APROVADO') {
            return $this->valor * 0.02;
        }

        throw new \DomainException(
            'Orçamentos reprovados e finalizados não podem receber desconto.'
        );
    }

}