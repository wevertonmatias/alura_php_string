<?php

$email = 'vinucius@email.com.br';

var_dump(substr($email,0,8 ));
var_dump((substr($email, 9)));

$email = 'Paulo@alura.com.br';
$index = strpos($email, '@');

var_dump(substr($email, 0, $index));
var_dump(substr($email, $index+1));

$senha = 'abc';
$senha2 = 'àçã';
var_dump(strlen($senha));
var_dump(strlen($senha2));