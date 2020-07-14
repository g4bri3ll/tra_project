<?php

namespace App\Classes;

class Cliente
{

    private $id;
    private $nome;
    private $cpf;
    private $conta;

    public function __construct(int $id, String $nome, int $cpf, object $conta)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->conta = new ContaCorrente();
    }

    public function abrirConta(): String
    {
        echo "Conta aberta";

    }

    public function fechaConta(): String
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

    public function setConta($conta)
    {
        return $this->id = $id;
    }

    public function getConta()
    {
        return $this->conta;
    }

}

?>