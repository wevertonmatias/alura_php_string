<?php

$anoNasc = '1995';
$anoNasc = '  1995';
//    $anoNasc = '1995a'; não gera erro mas um aviso.
$idade = 2023 - $anoNasc;
echo $idade.PHP_EOL;

//    $anoNasc2 = 'a1995';
//    $idade2 = 2023 - $anoNasc2;
//    echo $idade2.PHP_EOL;

//    $anoNasc3 = '1 9 9 5';
//    $idade3 = 2023 - $anoNasc3; //ano interpretado como valor 1
//    echo $idade3.PHP_EOL;

$anoNasc4  = 'a1995';

//versões antigas a string teria o valor zero de atenderia a condição
if($anoNasc4 == 0){
    echo 'SIM'.PHP_EOL;
}else{
    echo 'NÃO'.PHP_EOL;
}