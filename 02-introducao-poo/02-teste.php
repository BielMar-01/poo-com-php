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