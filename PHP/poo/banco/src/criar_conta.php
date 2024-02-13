<?php
    function criar_conta(string $cpf, string $nomeTitular, float $saldo): array
    {
        return [
            $cpf = [
                'titular' => $nomeTitular,
                'saldo' => $saldo
            ]
        ];
    }