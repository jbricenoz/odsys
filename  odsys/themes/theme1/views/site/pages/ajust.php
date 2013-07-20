<?php
$this->pageTitle=Yii::app()->name . ' - Ajust';
$this->breadcrumbs=array(
	'Ajust',
);
?>
<h1>Ajustes</h1>

<p>Area de configuracion parametros basicos del sistema.</p>

<div class="span-23 showgrid">
<div class="dashboardIcons span-16">
    
     <div class="dashIcon span-3">
        <a href="/odsys/index.php/site/menu"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/big_icons/icon-redo.png" alt="Order History" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/site/menu">Home</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/users/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-person.png" alt="Inbox" /></a>
        <div class="dashIconText "><a href="/odsys/index.php/users/index">Usuarios</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/tipos/index"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/big_icons/icon-gear2.png" alt="Order History" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/tipos/index">Tipologia</a></div>
    </div>
</div><!-- END OF .dashIcons -->


<!--<div class="flash-notice span-22 last">
<p>This is a "static" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>
</div>-->

</div>