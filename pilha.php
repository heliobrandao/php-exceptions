<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    // try{
    //     $arrayFixo = new SplFixedArray(2);
    //     $arrayFixo[3] = 'Valor';
    // } catch (RuntimeException $err) {
    //     echo "Aconteceu um erro na função 1" . PHP_EOL;
    // }

    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $err) {
        echo $err->getMessage() . PHP_EOL;
        echo $err->getLine() . PHP_EOL;
        echo $err->getTraceAsString() . PHP_EOL;

        throw new RuntimeException(
            'Exceção foi tratada, mas, pega ai',
            1,
            $err
        );

    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $exception = new RuntimeException();
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
