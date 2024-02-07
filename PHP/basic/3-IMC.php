<?php
    $peso = 62;
    $altura = 1.64;

    $imc = $peso / pow($altura, 2);
    echo "IMC: $imc" . PHP_EOL;
    if($imc < 18.5)
        echo "CLASSIFICAÇÃO: MAGREZA";
    elseif($imc >= 18.5 && $imc < 25)
        echo "CLASSIFICAÇÃO: NORMAL";
    elseif($imc >= 25 && $imc < 30)
        echo "CLASSIFICAÇÃO: SOBREPESO";
    elseif($imc >= 30 && $imc < 40)
        echo "CLASSIFICAÇÃO: OBESIDADE";
    elseif($imc >= 40)
        echo "CLASSIFICAÇÃO: OBESIDADE GRAVE";