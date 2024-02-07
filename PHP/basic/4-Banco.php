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

    titularDaContaComLetrasMaiusculas(titular: $contas['123.456.789-03']['titular']);
    unset($contas['123.456.789-02']);

    foreach($contas as $cpf => $conta)
    {
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Contas</h1>
    <ul>
        <?php 
            foreach($contas as $cpf){
                escreva($cpf);
            }
        ?>
    </ul>
</body>
</html>