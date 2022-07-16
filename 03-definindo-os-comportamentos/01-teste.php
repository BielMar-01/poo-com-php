<?php

require 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->saldo = 200;
var_dump($primeiraConta);

$segundaConta = new Conta();
$segundaConta->saldo = 300;
var_dump($segundaConta);

$primeiraConta->sacar(150);
var_dump($primeiraConta);

$segundaConta->sacar(350);
var_dump($segundaConta);