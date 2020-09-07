<div class="titulo">Erros Personalizados</div>
<?php

class FaixaEtariaException extends Exception{
    public function __construct($message,$code=0,$previous = null) {
        echo "Erro personalizado: $message<br>";
        parent::__construct($message,$code,$previous);
    }
}


function calcularAposentadoria($idade){
    if($idade<18){
        throw  new FaixaEtariaException('Ta maluco mermão, voce ainda nem saiu da casca do ovo<br>');
    }
    if($idade>70){
        throw  new FaixaEtariaException("Vlw vovo trabalhou demais<br>");
    }
    return 70-$idade;
}

$idadesAvaliadas = [15,30,60,80];

foreach ($idadesAvaliadas as $idade){
    try{
        $tempoRestante = calcularAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes<br>";
    } catch (FaixaEtariaException $e) {
        echo "Não foi possivel calculcar a idade para $idade anos<br>";
        echo "motivo: {$e->getMessage()}<br>";
    }
}
echo '<br>Fim';
