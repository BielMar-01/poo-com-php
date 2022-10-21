<?php

require 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Gabriel Marques');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo "===================================" . PHP_EOL;

$segundaConta = new Conta('987.654.321-11', 'Ana Luisa');
$segundaConta->deposita(500);

echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;

echo "===================================" . PHP_EOL;

$terceiraConta = new Conta('147.258.369-22', 'Pedro Augusto');
$terceiraConta->deposita(700);

echo $terceiraConta->recuperaNomeTitular() . PHP_EOL;
echo $terceiraConta->recuperaCpfTitular() . PHP_EOL;
echo $terceiraConta->recuperaSaldo() . PHP_EOL;

echo "===================================" . PHP_EOL;

echo Conta::recuperaNumeroDeContas();