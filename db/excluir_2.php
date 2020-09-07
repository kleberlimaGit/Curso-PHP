<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h1>Excluir 02</h1>
<?php
require_once 'conexao.php';

$sql = "SELECT id, nome, nascimento , email , salario FROM cadastro";

$conexao = novaConexao();
$getExcluir = filter_input(INPUT_GET, 'excluir');
if($getExcluir){
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    
    $stmt->bind_param("i", $getExcluir);
    $stmt->execute();
}

$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $registros[] = $row;
    }
}elseif ($conexao->error) {
    echo "Error: " . $conexao->error;
}


$conexao->close();
?>
<a href="exercicio.php?dir=db&file=inserir_2">Novo</a>
<table class="table table-striped ">
    <thead class="table-dark ">
        
    <th>Nome</th>
    <th>Nascimento</th>
    <th>Email</th>
    <th>Salário</th>
    <th>Deletar</th>
    <th>Alterar</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
        <tr>
            <td><?= $registro['nome']?></td>
            <td><?=
                    date('d/m/Y', strtotime($registro['nascimento']));
                ?></td>
            <td><?= $registro['email']?></td>
            <td>R$ <?= $registro['salario']?></td>
            <td>
                <a href="http://localhost/PHPCurso/exercicio.php?dir=db&file=excluir_2&excluir=<?=$registro['id']?>" class="btn btn-danger">Delete</a>
            </td>
            <td>
                <a href="http://localhost/PHPCurso/exercicio.php?dir=db&file=alterar&codigo=<?=$registro['id']?>" class="btn btn-primary">Editar</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    .table{
        width: 90%;
        margin: 40px auto;
    }

</style>


