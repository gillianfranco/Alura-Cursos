<?php
$array = [
    [
        'aluno' => 'Gillian',
        'nota' => 10
    ],
    [
        'aluno' => 'Johnson',
        'nota' => 8.5
    ]
];

$notas1 = [
    'Maria' => 10,
    'Pedro' => 5,
    'João' => 7,
    'Isabel' => 8
];

$notas2 = [
    10,
    5,
    7,
    8
];

function ordenamento(array $array1, array $array2) :int
{
    // if($array1['nota'] < $array2['nota']){
    //     return -1;
    // }
    // if($array1['nota'] > $array2['nota']){
    //     return 1;
    // }
    // return 0;

    return $array1['nota'] <=> $array2['nota'];
}

usort(array: $array, callback: 'ordenamento');
// var_dump($array);

asort($notas1); // Ordena as notas de forma crescente
// arsort($notas1); // Ordena as notas de forma decrescente

// ksort($notas1); // Ordena de forma crescente
// krsort($notas1); // Ordena de forma decrescente

sort($notas2); // Ordena de forma crescente
// rsort($notas2); // Ordena de forma decrescente

var_dump($notas1);
var_dump($notas2);