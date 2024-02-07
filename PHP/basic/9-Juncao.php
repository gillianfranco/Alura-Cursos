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

    $array3 = array_merge($array1, $array2);

    foreach($array3 as $indices => $nomes){
        echo '"' . $indices . ' -> ' . $nomes . '"'. PHP_EOL;
    }