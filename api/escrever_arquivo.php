<div class="titulo">File</div>
<?php
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "valor inicial \n");
$str = "outra linha \n";
fwrite($arquivo, $str);
fclose($arquivo);


$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "adionado agora");
fclose($arquivo);

//$arquivo = fopen('teste.text','x'); 
/*fwrite($arquivo, "tentar escrever algo"); 
 * neste caso aparece uma mensagem de erro pq o parametro 'x' 
 * é para criar um arquivo novo.
1 */

$arquivo = fopen('teste.txt','r');
//echo fread($arquivo,10);
//echo '<br>';
//echo fread($arquivo,10);
//echo '<br>';
$tamanho = filesize('teste.txt');
echo $tamanho.'<br>';
echo fread($arquivo, $tamanho).'<br>';
fclose($arquivo);


$arquivo = fopen("teste.txt", 'r');

echo fgets($arquivo).'<br>';
echo fgets($arquivo).'<br>';
echo fgets($arquivo).'<br>';/* esse modo não é o melhor para se usar pois 
 * voce deveria saber quantas linhas o arquivo possuia*/
fclose($arquivo);
echo '<hr>';
$arquivo = fopen('teste.txt','r');
while(!feof($arquivo)){
    echo fgets($arquivo), '<br>';// se mudar o fgets por fgetc ele imprime caracter por caracter
}
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt','r+');
echo fgets($arquivo),'<br>';
echo fgets($arquivo),'<br>';
fwrite($arquivo, "\n Adicionado agora");
fclose($arquivo);


