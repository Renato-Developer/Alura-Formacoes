<?php

namespace Alura\Banco\Modelo\Conta;

Class ContaPoupanca extends Conta 
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}