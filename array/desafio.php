<div class="titulo">Desafio 04</div>
<form action="#" method="POST">
    <label for="linha">Linha: </label>
    <input type=number name="linha" id="linha">
    <label for="coluna">Coluna: </label>
    <input type=number name="coluna" id="coluna">
    
    <button>Construir Tabela</button>
        
</form>


<?php
    $linha = (int)filter_input(INPUT_POST, 'linha');
    $coluna = (int)filter_input(INPUT_POST, 'coluna');
?>
<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table tr{
        border: 1px solid #444;
    }
    table td{
        padding: 10px 20px;
    }
    [mudar_cor]{
        background-color: black;
        color: white;
    }
        
</style>

<table>
    <?php
        $cont = 1;
        for($i=1;$i<=$linha;$i++){
            echo '<tr>';
            for($j=1;$j<=$coluna;$j++){
                echo"<td>$cont</td>";
                $cont++;
            }
            
            echo "</tr>";
    }

    
    ?>
    
</table>




