<div class="titulo">Gerenciando Sessão</div>
<?php

session_start();
echo session_id();
error_reporting(E_ERROR);
$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo'<br>'. $_SESSION['contador'];


if($_SESSION['contador']%5===0){
    session_regenerate_id();
}

