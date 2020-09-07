<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Alterar Registro</div>

<title>Formulario BootStrap</title>
<style>
    .content {
        width: 80%;
        margin: 10px auto;
    }

</style>
</head>

<body>
    <div class="content">
        <?php
        require_once 'conexao.php';
        $conexao = novaConexao();
//        error_reporting(E_ERROR);
            
        
        
        
        
        $codigo = filter_input(INPUT_GET, 'codigo');
        if ($codigo) {
            $sql = "SELECT * FROM cadastro WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("i", $codigo);

            if ($stmt->execute()) {
                $resultado = $stmt->get_result();

                if ($resultado->num_rows > 0) {
                    $dados = $resultado->fetch_assoc();
                    
                    if ($dados['nascimento']) {
                        $dt = new DateTime($dados['nascimento']);
                        $dados['nascimento'] = $dt->format(('d/m/Y'));
                    }
                }
            }
        }

        $erros = [];
        if (count($_POST) > 0) {
            $dados = $_POST;
            
            var_dump($dados);
            if (trim($dados['nome']) === "") {
                $erros['nome'] = 'Nome é obrigatório!';
            }

            if (isset($dados['nascimento'])) {
                $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
                if (!$data) {
                    $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
                }
            }




            if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                $erros['email'] = 'E-mail inválido';
            }
            if (!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
                $erros['site'] = 'Site inválido use o formato http://';
            }

            $filhosConfig = [
                "options" => ["min_range" => 0, "max_range" => 20]
            ];

            if (!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0) {
                $erros['filhos'] = 'Quantidade de filhos inválida (0-20)';
            }

            $salarioConfig = (float) $dados['salario'];
            if ($salarioConfig == 0 || !is_float($salarioConfig)) {
                $erros['salario'] = 'Salário inválido!';
            }
            if (!count($erros)) {

                $sql = "UPDATE cadastro 
                    SET nome = ?,nascimento = ?,email = ?,site = ?,filhos = ?,salario = ?
                    WHERE id = ?";

                $stmt = $conexao->prepare($sql);

                $params = [
                    $dados['nome'],
                    $data ? $data->format('Y-m-d') : null,
                    $dados['email'],
                    $dados['site'],
                    $dados['filhos'],
                    $dados['salario'],
                    $dados['id'],
                ];
                $stmt->bind_param("ssssidi", ...$params);
                if ($stmt->execute()) {
                    header('Location: exercicio.php?dir=db&file=excluir_2');
                }
            }
        }
        ?>

        <?php if(count($erros) > 0): ?>
            <div class="alert alert-danger" role="alert">
                <?= "Por favor preencha os campos obrigatórios" ?>
            </div>
        <?php endif ?>




        <form action="#" method="post">
            <input type="hidden" name="id" value="<?= $dados['id']?>">
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="<?= $dados['nome'] ?>" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $erros['nome'] ?>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label for="nascimento">Nascimento</label>
                    <input type="text" name="nascimento" id="nascimento" value="<?= $dados['nascimento'] ?>" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $erros['nascimento'] ?>
                    </div>
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" value="<?= $dados['email'] ?>"  class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $erros['email'] ?>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="site">Site</label>
                    <input type="url" name="site" id="site"  value="<?= $dados['site'] ?>"  class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" placeholder="ex: http://">
                    <div class="invalid-feedback">
                        <?= $erros['site'] ?>
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="filhos">Quantidade de filhos (0-20)</label>
                    <input type="number" name="filhos" id="filhos" value="<?= $dados['filhos'] ?>"  class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $erros['filhos'] ?>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="salario">Salário</label>
                    <span class="format-real" > R$ </span><input type="text" name="salario" id="salario" value="<?= $dados['salario'] ?>"
                                                                 class="form-control real <?= $erros['salario'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $erros['salario'] ?>
                    </div>
                </div>
            </div>
            <button class='btn btn-secondary btn-lg'>Enviar</button>
    </div>

</form>

</div>

</body>

</html>


