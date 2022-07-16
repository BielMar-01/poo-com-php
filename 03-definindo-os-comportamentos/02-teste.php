<?php

require 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->saldo = 0;
$primeiraConta->depositar(100);
echo $primeiraConta->saldo;
