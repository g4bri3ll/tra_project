<?php

namespace App\Classes;

abstract class Conta
{
    private $id;
    private $saldo;
    private $dataAbertura;
    private $tipo;
    private $operacoes;
    private $ativa;

    public function __construct(int $id, double $saldo, string $dataAbertura, int $tipo, string $operacoes, is $ativa)
    {
        $this->id = $id;
        $this->saldo = $saldo;
        $this->dataAbertura = $dataAbertura;
        $this->tipo = $tipo;
        $this->operacoes = $operacoes;
        $this->ativa = $ativa;
    }

    public function efetuarSaque()
    {

    }

    public function efetuarDeposito()
    {

    }

    public function registrarOpercacao()
    {

    }

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setSaldo($saldo)
    {
        return $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setDataAbertura($dataAbertura)
    {
        return $this->dataAbertura = $dataAbertura;
    }

    public function getDataAbertura()
    {
        return $this->dataAbertura;
    }

    public function setTipo($tipo)
    {
        return $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setOperacacoes($operacacoes)
    {
        return $this->operacacoes = $operacacoes;
    }

    public function getOperacacoes()
    {
        return $this->operacoes;
    }

    public function setAtiva($ativa)
    {
        return $this->ativa = $ativa;
    }

    public function getAtiva()
    {
        return $this->ativa;
    }

}

?>