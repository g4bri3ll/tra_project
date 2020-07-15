<?php

namespace view;

require_once '../vendor/autoload.php';

use App\Classes\Conta;
use App\Classes\ContaCorrente;
use App\Classes\Cliente;
use http\Env\Request;

$dadosEntrada = [
    'ativa' => true,
    'deposito' => '100',
    'saque' => ['25','15', '65', '10', '25'],
    'idConta' => 1,
    'operacoes' => ['Saque','Depositar', 'Saque', 'Saque', 'Depositar'],
    'dataAbertura' => ['2020/07/01', '2020/07/03', '2020/07/06', '2020/07/11', '2020/07/14'],
    'inicio' => 'inicio'
];

$entrada = new \App\Classes\Banco();
$entrada->entrada($dadosEntrada);


?>