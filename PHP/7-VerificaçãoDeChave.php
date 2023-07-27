<?php
    $nota = [
        'Maria' => 8,
        'João' => 9,
        'Pedro' => 7.5,
        'Isabel' => 10,
        'Ana' => null
    ];

    var_dump(array_key_exists('Ana', $nota)); // Verifica apenas se a chave existe
    var_dump(isset($nota['Ana'])); // Verifica se o valor da chave é válido
