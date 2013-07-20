<?php 
$dataProvider = $_SESSION['datos_filtrados']->getData();
$contador=count($dataProvider);
$this->layout = 'pdf';
?>

<style type="text/css" title="currentStyle"> 
.CSSTable {
        page-break-after:always;
        page-break-inside:avoid; page-break-after:auto;
	margin:0px;
        padding:0px;
	width:62%;
        font-size: 11px;
	border:1px solid #ffffff;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTable table{
	width:60%;
	/*height:100px;*/
	margin:0px;
        padding:0px;
}.CSSTable th{
	font-weight: bold;
	background-color: #001d7e;
        color: #FFF;
	border-bottom: 1px solid #cef; 
}.CSSTable tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTable table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTable table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTable tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTable tr:hover td{
	background-color:#cccccc;
        color:#001d7e;
}
.CSSTable tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTable tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
</style>

<center>
<table class="CSSTable">
     <thead>
    <tr>
       
                <th width="100%">&nbsp;Fecha</th>
                <th width="100%">&nbsp;Unidad Programatica</th>
                <th width="100%">&nbsp;Programa</th>
                <th width="100%">&nbsp;C1VESALANO</th>
                <th width="100%">&nbsp;CSUBSECUENTE</th>
                <th width="100%">&nbsp;APREVENTIVA</th>
                <th width="100%">&nbsp;ACURATIVA</th>
                <th width="100%">&nbsp;PROMHORAS</th>
                <th width="100%">&nbsp;PROMACTIV</th>

    </tr>
     </thead>
     <tbody>
     <?php          
        $i=0;
        while($i<$contador): ?>
      <tr>
                <td width="100%">&nbsp;<?php echo $dataProvider[$i]["FECHA"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["COD"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["CODT"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["C1VESALANO"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["CSUBSECUENTE"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["APREVENTIVA"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["ACURATIVA"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["PROMHORAS"];?></td>
                <td width="19%">&nbsp;<?php echo $dataProvider[$i]["PROMACTIV"];?></td>

     </tr>
     <?php $i++; endwhile; ?>
     <tbody>
</table>
    
   
    <form>
        <input type="button" onClick="window.print(); style.visibility='hidden'" name="Guardar/Imprime" value="Imprimir">    
    </form>    

</center>