<?php
 
namespace Alura\Banco\Modelo;
use InvalidArgumentException;


final class CPF
{
    private $numero;

    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            throw new InvalidArgumentException("CPF precisa estar no formato XXX.XXX.XXX-XX");
            //echo "Cpf inválido";
            //exit();
        }
        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}
