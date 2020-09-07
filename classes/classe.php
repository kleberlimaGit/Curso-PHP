<?php
require __DIR__.'./classePhp.php';
class classe extends classePhp {
    public $parametro;
    
    function __construct($parametro) {
        $this->parametro = $parametro;
    }

}
