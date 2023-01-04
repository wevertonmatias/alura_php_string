<?php

$url = 'https://alura.com.br';

var_dump(str_starts_with($url, 'https'));
var_dump(str_ends_with($url, '.br'));

if(str_ends_with($url, '.br')){
    echo 'Domínio do Brasil'.PHP_EOL;
}else{
    echo 'Não é um domínio do Brasil'.PHP_EOL;
}