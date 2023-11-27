<?php
    $primeiroBimestre = [
        'Maria' => 10,
        'João' => 7.5,
        'Marta' => 10
    ];

    $segundoBimestre = [
        'Maria' => 9,
        'João' => 9,
        'Marta' => 10
    ];

    //var_dump(array_diff($primeiroBimestre, $segundoBimestre)); // Retorna a diferença de acordo com o valor dos índices
    //var_dump(array_diff_key($primeiroBimestre, $segundoBimestre)); // Retorna a diferença de acordo com o índice
    //var_dump(array_diff_assoc($primeiroBimestre, $segundoBimestre)); // Retorna a diferença de acordo com a associação entre o índice e o valor

    // $ausentesNoSegundoBimestre = array_diff_key($primeiroBimestre, $segundoBimestre);

    // $alunos = array_keys($ausentesNoSegundoBimestre); // Recupera os índices de um array
    // $notas = array_values($ausentesNoSegundoBimestre); // Recupera os valores de um array

    // var_dump(array_flip(array_combine($notas, $alunos))); // Combina e inverte os dados
    
