<?php

$nome = 'Paulo Silva';

var_dump(explode(' ', $nome));

list($nome, $sobrenome) = explode(' ', $nome);

var_dump($nome, $sobrenome);

$csv = 'Paulo Silva, paulo@gmail.com, 32';

var_dump(explode(',', $csv));