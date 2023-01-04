<?php

$email = 'vinucius@email.com.br';

var_dump(substr($email,0,8 ));
var_dump((substr($email, 9)));

$email = 'Paulo@alura.com.br';
$index = strpos($email, '@');

var_dump(substr($email, 0, $index));
var_dump(substr($email, $index+1));