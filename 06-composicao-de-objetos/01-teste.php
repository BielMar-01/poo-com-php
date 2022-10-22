<?php

require 'src/Conta.php';
require 'src/Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-19', 'Gabriel Marques'));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo "===================================" . PHP_EOL;

$segundaConta = new Conta(new Titular('987.654.321-11', 'Ana Luisa'));
$segundaConta->deposita(500);

echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;

echo "===================================" . PHP_EOL;

echo Conta::recuperaNumeroDeContas();