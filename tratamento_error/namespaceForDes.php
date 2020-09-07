<?php
namespace Aritmetica;

class NaoInteiroException extends \Exception{
    
}

function intdiv($a,$b){
    if($b==0){
        throw new \DivisionByZeroError();
    }
    if($a%$b>0){
        throw  new NaoInteiroException();
            
    }
    return $a/$b;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

