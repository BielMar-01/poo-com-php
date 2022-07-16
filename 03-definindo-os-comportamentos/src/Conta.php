<?php

class Conta {

    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorASacar) {

        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
        } else {
            $this->saldo -= $valorASacar;
        }
    }
}