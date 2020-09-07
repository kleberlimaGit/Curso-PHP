
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/estilo.css">
        <link rel="stylesheet" href="assets/css/exercicio.css">
        <title>Exercício</title>
    </head>
    <body class="ecercicio">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Visualisação de Exercícios</h2>
        </header>
        <nav class="navegacao">
            <a href="index.php" ">Voltar</a>
            <a href="#" >Sem formatação</a>
            
        </nav>
        <main class="principal">
            <div class="conteudo">
                <?php 
                    //include($_GET['dir']."/".$_GET['file'].'php');
                    include("{$_GET['dir']}/{$_GET['file']}.php");
                ?>

            </div>
        </main>

        <footer class='rodape'>
            COD3R & ALUNOS &COPY; <?= date('Y');?>
        </footer>
    </body>
</html>

