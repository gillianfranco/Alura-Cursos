<?php
    require_once "4-Funções.php";

    $contas = [
        '123.456.789-01' => [
            'titular' => 'João',
            'saldo' => 1552.53
        ],
        '123.456.789-02' => [
            'titular' => 'Maria',
            'saldo' => 1234.09
        ],
        '123.456.789-03' => [
            'titular' => 'José',
            'saldo' => 1834.30
        ]
    ];

    $contas['123.456.789-01']['saldo'] = saque(
        saldo: $contas['123.456.789-01']['saldo'], valorDoSaque: 552.53
    );
    $contas['123.456.789-01']['saldo'] = deposito(
        saldo: $contas['123.456.789-01']['saldo'], valorDeDeposito: 1000
    );

    foreach($contas as $cpf => $conta)
    {
        escreva(
            mensagem: "{$conta['titular']} portador do CPF {$cpf}, possui o saldo de R$ {$conta['saldo']}".PHP_EOL
        );
    }