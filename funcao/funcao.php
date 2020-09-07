<div class="titulo">Desafio 05</div>

<?php
//Echo "Recurcividade <br>";
//
//$array = [1,2,[3,4,5],6,[7,[8,9,[10]]]];
//
//function percorrerNiveis($array,$niveis='>'){
//    foreach ($array as $element){
//        if(is_array($element)){
//            percorrerNiveis($element,$niveis . $niveis[0]);
//        }else{
//            echo "$niveis $element<br>";
//        }
//    }
//}
//percorrerNiveis($array);
//
//function fatorial($num){
//    if($num===1){
//        return 1;
//    }
//    return $num*fatorial($num - 1);
//    }
//$num=5;
//echo fatorial($num)."<br>";

echo "Função retornando uma função <br>";
function soma($a){
    return function($b) use ($a){
        return $a + $b;
    };
}
echo soma(4)(3);

