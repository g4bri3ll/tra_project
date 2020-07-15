<?php

namespace App\Classes;

class ContaPoupanca extends Conta
{
    private $taxaDeposito;

    public function __construct(int $taxaDeposito)
    {
        $this->taxaDeposito = $taxaDeposito;
    }

    public function efetuarDeposito(int $valor): int
    {
        return $this->setSaldo(($valor + $this->getTaxaDeposito()) + $this->getSaldo());
    }

    public function setTaxaDeposito($taxaDeposito)
    {
        return $this->taxaDeposito = $taxaDeposito;
    }

    public function getTaxaDeposito()
    {
        return $this->taxaDeposito;
    }

}

?>