<?php

require 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Gabriel Marques';
$primeiraConta->saldo = 200;

$segundaConta = new Conta();
$segundaConta->cpfTitular = '234.456.789-10';
$segundaConta->nomeTitular = 'Vinicius Dias';
$segundaConta->saldo = 400;

var_dump($primeiraConta, $segundaConta);

$a = 4;
$b = $a;
echo $b . PHP_EOL;

$b++;
echo $b . PHP_EOL;

echo $a . PHP_EOL;

$c = $segundaConta;
var_dump($c);

$c->saldo = 2000;
var_dump($c, $segundaConta);