<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<title>Reporte</title>
</head>

<?php if($model!==null){ ?>
<table>
<tr>
<td <?php echo "style='background-color:#CCC' style='color:#FFF'"; ?>>CEDULA</td>
<td <?php echo "style='background-color:#CCC' style='color:#FFF'"; ?>>NOMBRE</td>
<td <?php echo "style='background-color:#CCC' style='color:#FFF'"; ?>>TELEFONO</td>
<td <?php echo "style='background-color:#CCC' style='color:#FFF'"; ?>>EMAIL</td>
</tr>
<?php foreach($model as $user) {?>
<tr <?php echo "style='background-color:#FFF'"; ?>>
<td><?php echo $user->CED; ?></td>
<td><?php echo $user->NOM; ?></td>
<td><?php echo $user->TEL; ?></td>
<td><?php echo $user->EMA;?></td>
</tr>
<?php } ?>
</table>
<?php } ?>