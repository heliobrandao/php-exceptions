<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');

try {
    $vinicius = new Titular(new CPF('123..789-01'), 'Vinicius', $endereco);

}catch(InvalidArgumentException | LengthException $exception){
    echo $exception -> getMessage().PHP_EOL;
}
