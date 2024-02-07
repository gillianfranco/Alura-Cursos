<?php
    $inteiro = 1;
    $float = 2.5;
    $array = [1, 2, 3, 4, 5];
    $lista = [
        1, 2, 3, 4
    ];
    $bool = true;
    $nula;

    if(is_int($inteiro)){
        echo "{$inteiro} é um inteiro" . PHP_EOL;
    }
    if(is_float($float)){
        echo "{$float} é um decimal" . PHP_EOL;
    }
    if(is_array($array)){
        echo 'array é um array' . PHP_EOL;
    }
    if(array_is_list($lista)){
        echo "lista é uma lista" . PHP_EOL;
    }
    if(is_bool($bool)){
        echo "{$bool} é booleano" . PHP_EOL;
    }