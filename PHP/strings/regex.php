<?php
    $phoneNumbers = ['(34) 9 97685204', '34 9 9775-4964'];
    $regex = '@^\(?([0-9]{2})\)? ?(9? ?[89][5-9][0-9]{2}-?[0-9]{4})$@';
    
    foreach($phoneNumbers as $numbers){
        $verifyNumber = preg_match($regex, $numbers, $matches);
        if($verifyNumber){
            echo "Número $numbers é válido!" . PHP_EOL;
            echo preg_replace($regex, '(XX) \2', $numbers) . PHP_EOL;
        }
    }