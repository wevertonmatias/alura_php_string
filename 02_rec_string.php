<?php

$email = 'vinucius@email.com.br';

var_dump(substr($email,0,8 ));
var_dump((substr($email, 9)));

$email = 'Paulo@alura.com.br';
$index = strpos($email, '@');

var_dump(substr($email, 0, $index));
var_dump(substr($email, $index+1));

$senha = 'abc';
$senha2 = 'àçãabc';
var_dump(strlen($senha));
var_dump(strlen($senha2));
var_dump(strtoupper($senha2));
//mbstring para solucionar caracter especial
//habilitar a extenção mb_string

var_dump(mb_strlen($senha));
var_dump(mb_strlen($senha2));
var_dump(mb_strtoupper($senha2));