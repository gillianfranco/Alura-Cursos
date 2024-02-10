<?php
    $phoneNumbers = ['(34) 9 97685204', '34 9 9775-4964'];
    
    foreach($phoneNumbers as $numbers){
        $verifyNumber = preg_match("@^\(?[0-9]{2}\)? ?9? ?[89][5-9][0-9]{2}-?[0-9]{4}$@", $numbers, $matches);
        if($verifyNumber){
            echo "Número $numbers é válido!" . PHP_EOL;
        }
    }