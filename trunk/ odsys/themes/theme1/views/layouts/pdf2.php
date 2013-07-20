<?php 

$dataProvider = $_SESSION['datos_filtrados']->getData();
$contador=count($dataProvider);
?>

<table border="1">
    <tr>
                <th class="principal" width="7%">&nbsp;Codigo</th>
                <th class="principal" width="7%">&nbsp;Descripcion</th>
                <th class="principal" width="14%">&nbsp;Categoria</th>
                <th class="principal" width="14%">&nbsp;Cantidad</th>
                <th class="principal" width="14%">&nbsp;Precio Venta</th>
                <th class="principal" width="14%">&nbsp;EX/GR</th>
                <th class="principal" width="14%">&nbsp;Estado</th>
    </tr>

     <?php          
        $i=0;
        while($i<$contador): ?>
    <tr>
                <td width="7%">&nbsp;<?php echo $dataProvider[$i]["COPR"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["DEPR"];?></td>
               <!-- <td class="odd" width="19%">&nbsp;<?php echo $dataProvider[$i]["COCA"];?></td>    -->
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["cat"]["DECA"];?></td>    

                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["CANT"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["PREV"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["EXEN"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["ESPR"];?></td>
     </tr>
     <?php $i++; endwhile; ?>

</table>