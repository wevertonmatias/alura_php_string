<?php

$nome = 'Paulo Silva';

var_dump(explode(' ', $nome));

list($nome, $sobrenome) = explode(' ', $nome);

var_dump($nome, $sobrenome);

$csv = 'Paulo Silva, paulo@gmail.com, 32';

var_dump(explode(',', $csv));


$telefones = ['82 98899-5599', '81 95566-8899', '11 95599-4499'];

//echo $telefones; erro não pode converter para string
echo implode(PHP_EOL, $telefones);
echo implode(', ', $telefones);

$nomeCompleto = 'José Felisbesto da Silva Santos';

var_dump(explode(' ', $nomeCompleto, 2));
var_dump(explode(' ', $nomeCompleto, 3));