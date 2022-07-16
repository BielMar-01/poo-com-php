<?php

require 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // Isso é ok
echo $primeiraConta->saldo;

$primeiraConta->saldo -= 300; // Isso não é ok