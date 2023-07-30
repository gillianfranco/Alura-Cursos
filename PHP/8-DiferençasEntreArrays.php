<?php
    $primeiroBimestre = [
        'Maria' => 10,
        'João' => 7.5,
        'Marta' => 8,
        'Pedro' => 9
    ];

    $segundoBimestre = [
        'Maria' => 9,
        'João' => 9,
        'Marta' => 10,
        'Pedro' => 9
    ];

    //var_dump(array_diff($primeiroBimestre, $segundoBimestre)); // Retorna a diferença de acordo com o valor dos índices
    var_dump(array_diff_key($primeiroBimestre, $segundoBimestre)); // Retorna a diferença de acordo com a chave
