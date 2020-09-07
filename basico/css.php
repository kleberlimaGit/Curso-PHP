<div class="titulo">Integração CSS/PHP</div>
<h1>
    <?php
    echo 'Olá ';
    echo '<small>';
    echo 'Mundo';
    echo '</small>'
    
    ?>
</h1>
<?= "<div> Outra forma de me 'expressar' !</div>"?>
<br>
<div>
    <button><?= "teste"?></button>
</div>
<style>
    button{
        padding: 5px 20px;
        background-color: var(--cor-principal);
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }
    [center]{/*qualquer propriedade html que tenha a propriedade center*/
        display: flex;
        justify-content: center;
    }
</style>

