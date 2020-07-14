<?php

namespace App\Classes;

use http\Env\Request;

class Banco
{

    public function entrada(Request $request)
    {
        return $valida = "verdadeiro";
    }

    public function processamento($arrayValida)
    {

    }

    public function saida($arrayDados)
    {
        print_r($arrayDados);
    }

}

?>