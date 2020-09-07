
<?php
define('TAXA_DE_JUROS', 5.9);//No PHP o padrao de constante é usar nomes em 
                             //caixa alta separados por __ cria-se uma constante a partir da funçao define
echo '<br>'.TAXA_DE_JUROS;   // não se usa $ em constante.
const NOVA_TAXA = 2.5;     // tambem pode-se usar a palavra const
$taxa = 1.6;
//const OUTRA_TAXA = $taxa; usando o  const voce nao pode atribuira partir de uma variavel ($a)
define(OUTRA_TAXA,$taxa);// mas com a funçao define é possivel 

var_dump(1<>1 || 1!=1);// ( <> )/( != ) diferente no php;