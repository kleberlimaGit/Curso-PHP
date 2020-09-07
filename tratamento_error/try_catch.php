<div class="titulo">Try/Catch</div>
<?php

try{
   echo intdiv(7, 0);
} catch (Error $e) {
    echo "Teve um erro aqui <br>";
}


try{
    throw new Exception('Um erro muito estranho aconteceu');
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {
    echo 'Divisao por Zero';
} catch (Throwable $e){
    echo 'Erro encontrado: '.$e->getMessage().'<br>';
}


