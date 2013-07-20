<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<title>Reporte</title>
</head>
<div id="header" style="margin:10px; color:#001d7e;">
                <h1>Reporte de consultas</h1>
</div><!-- header -->
<?php $dataProvider = $_SESSION['datos_filtrados']->getData();
$contador=count($dataProvider);?>
<table>
<tr>
<td <?php echo "style='background-color:#001d7e' style='width:100px;' style='color:#FFF'"; ?>>Fecha</td>
<td <?php echo "style='background-color:#001d7e' style='width:100px;' style='color:#FFF'"; ?>>Unidad</td>
<td <?php echo "style='background-color:#001d7e' style='width:100px;' style='color:#FFF'"; ?>>Tipo</td>
<td <?php echo "style='background-color:#001d7e' style='width:100px;' style='color:#FFF'"; ?>>1 ves año</td>
<td <?php echo "style='background-color:#001d7e' style='width:100px;' style='color:#FFF'"; ?>>SUBSECUENTE</td>
<td <?php echo "style='background-color:#001d7e' style='width:100px;' style='color:#FFF'"; ?>>PREVENTIVA</td>
<td <?php echo "style='background-color:#001d7e' style='width:100px;' style='color:#FFF'"; ?>>CURATIVA</td>
<td <?php echo "style='background-color:#001d7e' style='width:150px;' style='color:#FFF'"; ?>>HORAS PROMOCION</td>
<td <?php echo "style='background-color:#001d7e' style='width:150px;' style='color:#FFF'"; ?>>ACTIVIDADES PRO</td>
</tr>
<?php foreach($dataProvider as $user) {?>
<tr <?php echo "style='background-color:#FFF; width:60px;'"; ?>>
<td><?php echo $user->FECHA; ?></td>
<td><?php echo $user->COD; ?></td>
<td><?php echo $user->CODT; ?></td>
<td><?php echo $user->C1VESALANO; ?></td>
<td><?php echo $user->CSUBSECUENTE;?></td>
<td><?php echo $user->APREVENTIVA;?></td>
<td><?php echo $user->ACURATIVA;?></td>
<td><?php echo $user->PROMHORAS;?></td>
<td><?php echo $user->PROMACTIV;?></td>
</tr>
<?php } ?>
</table>
<?php  ?>
<center style="padding:10px; color:#001d7e;">
                <br/>
                <?php echo "Ultima linea, generado el ", date("d-m-Y H:i:s"); ?>
               <br/>
		Copyright &copy; <?php echo date('Y'); ?> Odsys Software<br/>
		All Rights Reserved.<br/>
                
</center>