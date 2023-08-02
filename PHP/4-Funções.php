<?php
    function saque(float $saldo, float $valorDoSaque) : float
    {
        if($valorDoSaque > $saldo)
        {
            echo "Desculpe, você não tem saldo o suficiente para realizar o saque." . PHP_EOL;
        }
        else
        {
            $saldo -= $valorDoSaque;
        }

        return $saldo;
    }

    function deposito(float $saldo, float $valorDeDeposito) : float
    {
        if($valorDeDeposito < 0){
            echo "Desculpe, você não pode depositar valores negativos." . PHP_EOL;
        }
        else
        {
            $saldo += $valorDeDeposito;
        }

        return $saldo;
    }

    function escreva(array $conta)
    {
        ['titular' => $titular, 'saldo' => $saldo] = $conta;
        echo "<li>Titular: {$titular}. Saldo: {$saldo}</li>";
    }

    function titularDaContaComLetrasMaiusculas(string &$titular)
    {
        $titular = mb_strtoupper($titular);
    }