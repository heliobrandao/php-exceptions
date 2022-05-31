<?php
use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};
require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('cidade', 'bairro', 'rua', 'numero')
    )
);

try {
  $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exceptiion){
  echo "Valor a depositar precisa ser positivo";
}