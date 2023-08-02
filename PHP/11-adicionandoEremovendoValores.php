<?php
    $alunos = [
        'Maria',
        'João',
        'Pedro',
        'José',
        'Ana',
        'Isabel'
    ];

    var_dump($alunos);

    array_push($alunos, 'Alice'); //Adiciona um valor no final do array
    // array_unshift($alunos, 'Mateus'); // Adiciona um valor no início do array
    // $alunos[] = 'Ricardo';

    array_shift($alunos); // Remove o primeiro elemento do array
    // array_pop($alunos); // Remove o último elemento do array
    // unset($alunos[1]);  // Exclui o índice indicado

    var_dump($alunos);