<?php
require __DIR__.'./interfacePhp.php';
abstract class classePhp implements interfacePhp{
    //put your code here
    public function metodo1() {
        echo "Deu tudo certo";
    }

    public function metodo2($parametro) {
        echo "Meu nome é {$parametro}";
    }

}
