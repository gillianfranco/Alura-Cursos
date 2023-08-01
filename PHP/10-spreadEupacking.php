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

    function spread(int ...$array){
        return $array;
    }

    function unpacking(int $a, int $b, int $c){
        $array = [$a, $b, $c];
        return $array;
    }

    $unpacking = unpacking(...[1, 2, 3]);

    $spread = spread(1, 2, 3, 4, 5, 6);

    var_dump($spread);

    var_dump($unpacking);

    var_dump($arrays);