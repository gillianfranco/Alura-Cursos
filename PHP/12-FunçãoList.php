<?php
    $dados = [
        'nome' => 'Gillian',
        'idade' => 17,
        'nota' => 10
    ];

    list('nome' => $nome, 'idade' => $idade, 'nota' => $nota) = $dados;

    var_dump($nome, $idade, $nota);