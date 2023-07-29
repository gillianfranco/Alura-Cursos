<?php
    $nota = [
        'Maria' => 8,
        'João' => 9,
        'Pedro' => 7.5,
        'Isabel' => 10,
        'Ana' => null
    ];

    echo 'A chave existe?' . PHP_EOL;
    var_dump(array_key_exists('Ana', $nota)); // Verifica apenas se a chave existe
    echo 'O valor desta chave é nulo?' . PHP_EOL;
    var_dump(isset($nota['Ana'])); // Verifica se o valor da chave não é nulo
    echo 'O valor existe dentro do array?' . PHP_EOL;
    var_dump(in_array(10, $nota, false)); // Verifica se o valor existe dentro do array
    echo 'Este valor está em alguma chave do array?' . PHP_EOL;
    var_dump(array_search(10, $nota)); // Verifica qual chave tem o valor informado
