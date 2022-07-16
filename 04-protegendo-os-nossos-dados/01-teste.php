<?php

require 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // Isso é ok
echo $primeiraConta->saldo;

$primeiraConta->saldo -= 300; // Isso não é ok