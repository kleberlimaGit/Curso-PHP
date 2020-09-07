<div class="titulo">Desafio 09</div>

<?php
require_once __DIR__.'./namespaceForDes.php';

use function \Aritmetica\intdiv;

try{
    echo intdiv(8, 3).'<br>';
} catch (\Aritmetica\NaoInteiroException $e) {
    echo 'Resultado não é um numero inteiro<br>';
}

try{
    echo intdiv(8, 0).'<br>';
} catch (DivisionByZeroError $e) {
        echo "Divisao por Zero <br>";
}



