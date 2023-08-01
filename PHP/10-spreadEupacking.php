<?php
    $array1 = [
        'João',
        'Pedro',
        'Ana',
        'Maria'
    ];

    $array2 = [
        'José',
        'Marta',
        'Carlos',
        'Isabel'
    ];

    $arrays = [...$array1, 'Gillian', ...$array2];

    var_dump($arrays);