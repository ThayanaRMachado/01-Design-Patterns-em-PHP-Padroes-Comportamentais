<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Impostos\{Icms, Iss};
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

/*$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());
echo $calculadora->calcula($orcamento, new Iss());*/
$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 200;
//$orcamento->quantidadeItens = 7; //1º Teste
$orcamento->quantidadeItens = 5; //2º Teste

echo $calculadora->calculaDescontos($orcamento);
