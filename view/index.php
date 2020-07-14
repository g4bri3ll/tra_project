<?php

namespace view;

require_once '../vendor/autoload.php';

use App\Classes\Conta;
use App\Classes\ContaCorrente;

$contaCorrente1 = new ContaCorrente();
$contaCorrente1->id = 1;
$contaCorrente1->saldo = 50;
$contaCorrente1->dataAbertura = date('Y-m-d');
$contaCorrente1->tipo = 1;
$contaCorrente1->operacoes = '+';
$contaCorrente1->ativa = true;

$cliente1 = new Cliente(1,"Jose da silva",23568554512, $contaCorrente1);
$cliente1->conta->efetuarSaque();

$entrada = new \App\Classes\Banco();
$arrayValida = $entrada->entrada($_REQUEST);

$processa = new \App\Classes\Banco();
$processa->processamento($arrayValida);

?>