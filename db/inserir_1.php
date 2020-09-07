<h1>Inserir Registro 01</h1>
<?php
require_once 'conexao.php';

$sql = "INSERT INTO cadastro(
    nome,nascimento,email,site,filhos,salario)
    VALUES(
        'Pedrinho',
        '2020-08-31',
        'Pedrinho@outlook.com',
        'http://www.google.com.br',
        0,
        50.80
    )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);


if($resultado){
    echo 'Sucesso!!';
}else{
    echo $conexao->error;
}

$conexao->close();


