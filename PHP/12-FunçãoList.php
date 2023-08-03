<?php
    $dados = [
        'nome' => ['Gillian', 'Maria'],
        'idade' => [17, 12],
        'nota' => [10, 10]
    ];

    list('nome' => $nome, 'idade' => $idade, 'nota' => $nota) = $dados;

    var_dump($nome, $idade, $nota);

    foreach($dados as [$nome, $idade, $nota]){
        echo "$nome tem $idade anos e nota é de: $nota <br>";
    }