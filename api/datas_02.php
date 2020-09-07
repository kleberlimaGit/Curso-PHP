<div class="titulo">Datas #02</div>
<?php

function formatarData($time, $str = '%A, %d de %B de %Y'){
    $format = ucwords(strftime($str , $time)).'<br>';
    $format = str_replace('De', "de", $format);
    return $format;
}
setlocale(LC_TIME,'pt_BR','ptb.utf-8');
$formatData1 = 'D, d \d\e M \d\e Y';
$formatDataHora = '%A, %d de %B de %Y - %H:%M:%S';
$agora = new DateTime();
$agora->modify('-5 hour');

echo $agora->format('d/m/Y H:i:s').'<br>';

//print_r($agora);
//echo '<br>';

echo $agora->format($formatData1).'<br>';

echo formatarData($agora->getTimestamp());
echo formatarData($agora->getTimestamp(),$formatDataHora);

$dataFixa = new DateTime('1990-07-29 16:32:25');

echo formatarData($dataFixa->getTimestamp(),$formatDataHora);

$agora->modify('+1 year');

echo formatarData($agora->getTimestamp());


$dataPassada = new DateTime('1990-07-29');
$dataPresente = new DateTime();
$dataFutura = new DateTime('2020-09-03');

echo $dataFutura>$dataPresente?'Maior':'Menor';

echo '<br>';
