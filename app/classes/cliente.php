<?php

namespace App\Classes;

class Cliente
{

    private $id;
    private $nome;
    private $cpf;
    public $conta;

    public function __construct(int $id, String $nome, string $cpf, ContaCorrente $conta)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->conta = $conta;
    }

    public function abrirConta(): string
    {
        return "Conta aberta";
    }

    public function fechaConta(): string
    {
        return "Conta fechada";
    }

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setCpf($cpf)
    {
        return $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

}

?>