<?php

namespace App\Classes;

use App\Classes\Conta;

class ContaCorrente extends Conta
{
    private $taxaSaque;

    public function __construct(int $taxaSaque)
    {
        $this->taxaSaque = $taxaSaque;
    }

    public function efetuarSaque(int $valor): int
    {
        if ($this->getSaldo() >= ($valor + $this->getTaxaSaque())){
            $this->setSaldo($this->getSaldo() - $valor);
            return true;
        }
        return false;
    }

    public function setTaxaSaque($taxaSaque)
    {
        return $this->taxaSaque = $taxaSaque;
    }

    public function getTaxaSaque()
    {
        return $this->taxaSaque;
    }

}

?>