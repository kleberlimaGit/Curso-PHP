<div class="titulo">Sessão</div>
<?php

session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Kleber';
}
echo '<br>';
if(!$_SESSION['E-mail']){
    $_SESSION['E-mail'] = 'kleber@hot...';
}
?>
<p><a href="/PHPCurso/sessao/basico_sessao_alterar.php"> Alterar Sessão</a></p>