<div class="titulo">Datas #01</div>
<?php

// time() função retorna segundo.
// date('D') retorna o dia da semana date('d') do mes hoje seria 28;
// date('D,d \d\e M \d\e Y ') usar \d\e mostra na tela o de no caso hoje retornaria sexta, 28 de agosto de 2020
// D dia da semana dia numerico m mes numerico M mes escrito y ano abreviado Y ano completo

echo date('D, d \d\e M \d\e Y').'<br>';

$dataComHora = '%A, %d de %B de %Y - %H:%M:%S';
setlocale(LC_TIME,'pt_BR','ptb.utf-8');
function formatarData($time, $str = '%A, %d de %B de %Y'){
    $format = ucwords(strftime($str , $time)).'<br>';
    $format = str_replace('De', "de", $format);
    return $format;
}

$amanha = time() + 3600*24;
echo formatarData($amanha);

$proximaSemana = strtotime('+1 week');
echo formatarData($proximaSemana);

$dataFixa = mktime(15,30,50,1,25,1975);
echo formatarData($dataFixa, $dataComHora);
