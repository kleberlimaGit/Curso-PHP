
<?php
session_start();

print_r($_SESSION);
?>

<p>
    <strong>Nome: </strong> <?= $_SESSION['nome']?><br>
    <strong>E-mail: </strong> <?= $_SESSION['E-mail']?>
</p>

<?php
$_SESSION['E-mail'] = 'Kleber-r@outlook.com';
?>

<p>
    <a href="basico_sessao.php">Voltar</a>
</p>
<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>



