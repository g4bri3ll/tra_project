<?php

namespace App\Classes;

use http\Env\Request;
use App\Classes\ContaCorrente;

class Banco
{

    public function entrada($dadosEntrada)
    {
        return ($dadosEntrada['inicio'] == 'inicio') ? $this->processamento($dadosEntrada) : false;
    }

    public function processamento($dadosEntrada)
    {
        var_dump($dadosEntrada);

        $contaCorrente = new ContaCorrente(6);
        $contaCorrente->setSaldo(100);
        $contaCorrente->setTipo("Corrente");
        $contaCorrente->setDataAbertura('2020/07/13');
        $contaCorrente->setOperacacoes($dadosEntrada['operacoes']);
        $contaCorrente->setAtiva($dadosEntrada['ativa']);

        $cliente = new Cliente(2, 'Julia Adriana Pinto', '754.026.418-70', $contaCorrente);

        $contaPoupanca = new ContaPoupanca(2);

        //Abrindo a conta
        echo $cliente->abrirConta() . "<br>";

        if (!$dadosEntrada['ativa']){
            return $cliente->fechaConta();
        }

        //Realiza as operações de deposito ou saque
        try {

            $boo = true;

            for ($i = 0; $i < count($dadosEntrada['operacoes']); $i++) {

                if ($boo){

                    //Atribuindo o tipo de operação a ser realizada
                    $cliente->conta->setOperacacoes($dadosEntrada['operacoes'][$i]);

                    if ($cliente->conta->getOperacacoes() == 'Saque') {

                        echo "<div style='color: red;'> Esta sendo feito o saque na conta Corrente, de... " . $dadosEntrada['saque'][$i] . "<br />";

                        $recebeVerifica = $cliente->conta->efetuarSaque($dadosEntrada['saque'][$i]);

                        echo (!$recebeVerifica) ? "Não foi possivel efetuar o Saque!!!" . "<br />" : "Seu novo saldo da conta Corrente, e: " . $cliente->conta->getSaldo() . "<br />";

                        echo "</div> <hr />";

                    } else if ($cliente->conta->getOperacacoes() == 'Depositar') {

                        echo "<div style='color: blue'> Esta sendo feito o deposito na conta poupança, de... " . $dadosEntrada['deposito'] . "<br />";

                        $recebeVerifica = $contaPoupanca->efetuarDeposito($dadosEntrada['deposito']);

                        echo "Seu novo saldo na conta poupança de, e... " . $contaPoupanca->getSaldo() . "<br />";

                        echo "</div><hr/>";

                    } else {
                        echo "Não existe essa operção, tente outra!!! <br />";
                    }

                }

            }

        } catch(Exception $e) {
                echo $e->getMessage();
        }

    }

    public function saida($arrayDados)
    {
        print_r($arrayDados);
    }

}

?>