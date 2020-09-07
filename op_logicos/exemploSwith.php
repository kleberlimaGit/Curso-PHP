<div class="titulo">Conversor de Unidades Métricas</div>
<form action="#" method="POST">
    <input type="number" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km to Miles</option>
        <option value="milha-km">Miles to Km</option>
        <option value="km-metro">Km to meters</option>
        <option value="metro-km">Meters to Km</option>
    </select>
    <button>Calcular</button>
</form>
<style>
    button,select{
        font-size: 1.8rem;
    }

</style>
<?php
$number = filter_input(INPUT_POST, 'param');
$conversão = filter_input(INPUT_POST, 'conversao');
switch ($conversão) {
    case 'km-milha':
        $convertido = $number * 0.621371;
        echo "<br> {$number}Km to miles = {$convertido}miles";
        break;
    case 'milha-km':
        $convertido = $number * 1.60934;
        echo "<br> {$number} miles to Km = {$convertido}Km";
        break;
    case 'km-metro':
        $convertido = $number * 1000;
        echo "<br> {$number} Km to meters = {$convertido}m";
        break;
    case 'metro-km':
        $convertido = $number / 1000;
        echo "<br> {$number} meters to Km = {$convertido}Km";
        break;
}

