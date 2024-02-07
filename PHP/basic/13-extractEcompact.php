<?php
    $dados = [
        'nome' => 'Gillian',
        'idade' => 17,
        'nota' => 10
    ];

    extract($dados);
    var_dump($nome, $idade, $nota);

    $name = 'Maria';
    $age = 12;
    $grade = 10;

    var_dump(compact('name', 'age', 'grade'));