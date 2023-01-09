<?php
    $telefones = ['(82) 98899 - 5599', '(81) 95566 - 8899', '(11) 95599 - 4499'];
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
    foreach($telefones as $telefone){
        $telefoneValido = preg_match(
            $regex,
            $telefone);
        if($telefoneValido){
            echo 'Telefone válido' . PHP_EOL;
        }else{
            echo 'Telefone inválido' . PHP_EOL;
        }

        echo preg_replace(
            $regex,
            '(xx) \2',
            $telefone).PHP_EOL;

    }