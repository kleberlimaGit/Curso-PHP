<div class="titulo">ForEach</div>

<?php
//$array =[
//    'AAA',
//    'BBB',
//    'CCC',
//    'DDD',
//    'EEE',
//    'FFF'
//];
//for($i=0;$i<count($array);$i++){
//    if($i%2===0){
//        echo "<br>".$array[$i];
//    }
//    
//}
//
//foreach($array as $key => $value){
//    if($key%2!==0){
//        echo "<br>{$value}";
//    }
//}

$array =[
  [1 , 2, 3 ,4 ,5],  
  [6, 7, 8, 9, 10],  
  [11,12,13,14,15],  
  [16,17,18,19,20],  
    
];

    

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
    foreach ($array as $matriz){
        echo '<tr>';
        foreach($matriz as $valor){
            if(($valor) % 2!==0){
                echo"<td mudar_cor>$valor</td>";
            }else{
                echo"<td>$valor</td>";
            }
        }
        echo'</tr>';
    }
    
    
    ?>
    
    
</table>