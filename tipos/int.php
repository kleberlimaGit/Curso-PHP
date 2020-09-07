<?php

var_dump(11);//mostra o tipo da variavel;
echo PHP_INT_MAX;// mostra a quantidade em bits que o valor inteiro suporta (92233720036854775807)
//virgulas podem ser usadas para separar srings dentro de um echo
echo PHP_INT_MIN;// mostra a menor quantidade em bits que o valor inteiro suporta (-92233720036854775808)
echo PHP_FLOAT_MAX;
echo PHP_FLOAT_MIN;
echo 1.2e3;// significa 1.2*10^3 = 1200
echo 13E-3;// siginifica 13*10^-3 = 0.0013

//operações aritiméticas
intdiv(7, 4);//=1
round(7/4);// = 1,75 que arredonda para 2
7%4;//modulo = 3