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

var_dump($array);

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
var_dump($array);