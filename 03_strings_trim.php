<?php

$nomeCsv = ' Carlos Silva, 26 ';
var_dump(trim($nomeCsv));

$nomeCsv = ' ,.Carlos Silva, 26,. ';
var_dump(trim($nomeCsv, ',.'));
$nomeCsv = ',.Carlos Silva, 26,.';
var_dump(trim($nomeCsv, ',.'));
var_dump(ltrim($nomeCsv, ',.'));
var_dump(rtrim($nomeCsv, ',.'));
