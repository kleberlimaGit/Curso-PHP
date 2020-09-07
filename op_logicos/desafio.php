<div class="titulo">Desafio 03</div>
<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> tv 50' e Sorvete
    - Se apenas um for executado -> tv 32' e Sorvete
    - Se nehum for executado -> fica em casa mais saudavel;
-->
<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1(Terça): </label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2(Quinta): </label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>

</form>
<style>
    button,select{
        font-size: 1.8rem;
    }
</style>

<?php

$r1 =  filter_input(INPUT_POST, 't1');
$r2 =  filter_input(INPUT_POST, 't2');


if (isset($r1) && isset($r2)) {
    if ($r1 + $r2 > 1) {
        echo "Trabalho bem feito vamos comprar uma Tv 50' e tomar Sorvete";
    } elseif ($r1 + $r2 == 1) {
        echo "Meio trabalho feito Vamos comprar uma Tv 32' e tomar Sorvete";
    } elseif ($r1 + $r2 == 0) {
        echo 'Nenhum trabalho foi concluido, vamos ficar em casa é mais saudavel';
    }
}


//Aqui está parte de uma linha em meu código que trouxe o aviso no NetBeans:
//
//$page = (!empty($_GET['p'])) 
//Depois de muita pesquisa e ver como existem cerca de um zilhão de maneiras de filtrar esse array, descobri um que era simples. E meu código funciona e o NetBeans está feliz:
//
//$p = filter_input(INPUT_GET, 'p');
//$page = (!empty($p))