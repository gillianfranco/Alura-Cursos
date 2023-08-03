<?php
    $dados = [
        'nome' => ['Gillian', 'Maria'],
        'idade' => [17, 12],
        'nota' => [10, 10]
    ];

    $contas = [
        [
            'titular' => 'Gillian',
            'saldo' => 2032
        ],
        [
            'titular' => 'Maria',
            'saldo' => 3568
        ]
    ];

    // list('nome' => $nome, 'idade' => $idade, 'nota' => $nota) = $dados; // Coleta os dados do array e os armazena em variáveis
    // var_dump($nome, $idade, $nota);

    foreach($contas as ['titular' => $titular, 'saldo' => $saldo]){
        echo "$titular tem o saldo de $saldo" . PHP_EOL;
    }