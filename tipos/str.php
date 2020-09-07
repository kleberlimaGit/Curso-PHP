<?php

echo strtoupper('Maximizado');
strtolower('minimizado');
ucfirst('só a primeira letra');
ucwords('todas as palavras -> capitalize');
strlen('funcao lenght, mas nao se comporta bem por conta dos acentos');
mb_strlen('essa funçao len é melhor',"utf-8");
substr('so uma parte mesmo',7,6);// começa da 7 letra contando o 0 e vai ate a 6 letra sem contar a ultima
str_replace('isso', 'aquilo', 'Trocar isto por isso');// retorna trocar isso por aquilo;