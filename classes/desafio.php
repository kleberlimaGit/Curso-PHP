<div class="titulo">PHP teste</div>
        <?php
        require __DIR__.'./classe.php';
  
            $exemplo = new classe("kleber");
            $exemplo->metodo1();
            echo '<br>';
            $exemplo->metodo2($exemplo->parametro);
            
        ?>

