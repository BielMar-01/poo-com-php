<?php

require 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
echo $primeiraConta->saldo . PHP_EOL;

$segundaConta = new Conta();
echo $segundaConta->saldo . PHP_EOL;

$primeiraConta->trasferir(200, $segundaConta);
echo $segundaConta->saldo . PHP_EOL;
echo $primeiraConta->saldo . PHP_EOL;
