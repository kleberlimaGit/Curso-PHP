<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h1>Consultar</h1>
<?php
require_once 'conexao.php';

$sql = "SELECT * FROM cadastro";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

$registros = [];
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) { // fetch_assoc retorna um array associativo referente a tabela criada
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "Error: " . $conexao->error;
}

//print_r($registros);

$conexao->close();
?>

<table class="table table-striped ">
    <thead class="table-dark ">
        
    <th>#</th>
    <th>Nome</th>
    <th>Nascimento</th>
    <th>Email</th>
    <th>Filhos</th>
    <th>Salário</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
        <tr>
            <td><?= $registro['id']?></td>
            <td><?= $registro['nome']?></td>
            <td><?=
                    date('d/m/Y', strtotime($registro['nascimento']));
                ?></td>
            <td><?= $registro['email']?></td>
            <td><?= $registro['filhos']?></td>
            <td>R$ <?= $registro['salario']?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>





