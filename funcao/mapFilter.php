<div class="titulo">Map and Filter </div>


<?php

$notas = [5.8,7.3,9.8,4.8];
                         /*neste parametro a gente chama a funçao de mapeamento*/               
$notasFinais1 = array_map('round', $notas);
                                 /* aqui o array que será mapeado*/           

print_r($notasFinais1);

echo '<br>';
function aprovado($nota){
    return $nota>=6;
     
}
$apenasAprovados = array_filter($notas, 'aprovado');

print_r($apenasAprovados);