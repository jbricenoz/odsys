<?php  
  $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  $cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
  $cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  $cs->registerCssFile($baseUrl.'/css/jquery.css');

?>

<?php $this->pageTitle=Yii::app()->name; ?>

<h1><?php echo CHtml::encode(Yii::app()->name); ?> Dashboard</h1>
<!--<div class="flash-error">This is an example of an error message to show you that things have gone wrong.</div>
<div class="flash-notice">This is an example of a notice message.</div>
<div class="flash-success">This is an example of a success message to show you that things have gone according to plan.</div>-->
<!--<div class="span-23 showgrid">
<div class="dashboardIcons span-16">-->
    <div class="dashIcon span-3">
        <a href="/Odsys/index.php/cons/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-inbox.png" alt="Inbox" /></a>
        <div class="dashIconText "><a href="/odsys/index.php/cons/index">Consultas</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/pers/index"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/big_icons/icon-contact2.png" alt="Order History" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/pers/index">Personas</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/cont/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-clipboard.png" alt="Manage Prices" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/cont/index">Horas Contratadas</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/pla/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-people.png" alt="Customers" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/pla/index">Recurso Humano</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/site/page?view=reportes"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-chart.png" alt="Page" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/site/page?view=reportes">Reportes</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/up/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-house2.png" alt="Contacts" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/up/index">U Programatica</a></div>
    </div>   
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/ress/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-inbox2.png" alt="System Alerts" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/ress/index">Referencias</a></div>
    </div>
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/perm/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-write.png" alt="System Alerts" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/perm/index">Permisos</a></div>
    </div>
     <div class="dashIcon span-3">
        <a href="/odsys/index.php/capi/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-up.png" alt="System Alerts" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/capi/index">Capacidad I</a></div>
    </div>
     <div class="dashIcon span-3">
        <a href="/odsys/index.php/eqp/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tools2.png" alt="System Alerts" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/eqp/index">Equipamiento</a></div>
    </div>
     <div class="dashIcon span-3">
        <a href="/odsys/index.php/infra/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-house.png" alt="System Alerts" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/infra/index">Infraestructura</a></div>
    </div>
     <div class="dashIcon span-3">
        <a href="/odsys/index.php/pob/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-people2.png" alt="System Alerts" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/pob/index">poblacion</a></div>
    </div>
     <div class="dashIcon span-3">
        <a href="/odsys/index.php/jefeUP/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-file.png" alt="System Alerts" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/jefeUP/index">Jefes U.P.</a></div>
    </div>
     <div class="dashIcon span-3">
        <a href="/odsys/index.php/supr/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-flag.png" alt="System Alerts" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/supr/index">Supervisi&oacute;n</a></div>
    </div>

     <div class="dashIcon span-3">
        <a href="/odsys/index.php/siveo/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-chain2.png" alt="System Alerts" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/siveo/index">SIVEO</a></div>
    </div>
    
<!--</div><!-- END OF .dashIcons -->
<!--<div class="span-7 last">
<p>Estadisticas del dia para su Region, por favor tome nota de esto, de seguro le sera de ayuda hoy.</p>

            Capacidad instalada utilizada: 45/100
			<?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>45,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Recurso Humano activo: 95%
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>95,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Rendimiento de la Regi&oacute;n: 10%
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>10,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Evaluaci&oacute;n de la Regi&oacute;n: 25%            
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>25,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Servicios eficientes: 55%            
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>55,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
</div>
                
<!--</h1></h1><div class="span-10">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Pie Chart',
));
?>
<div class="chart2">
<div>
        <div class="text">
            <table class="myChart">
                <thead>
                    <tr>
                        <th></th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul</th>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                      <th>Sales</th>
                      <td>3923</td>
                      <td>2923</td>
                      <td>2931</td>
                      <td>3942</td>
                      <td>4921</td>
                      <td>6934</td>
                      <td>5934</td>
                    </tr>
                    <tr>
                      <th>Quotes</th>
                      <td>3623</td>
                      <td>2623</td>
                      <td>2831</td>
                      <td>3842</td>
                      <td>4821</td>
                      <td>6534</td>
                      <td>5134</td>
                    </tr>
                    <tr>
                      <th>Visitors </th>
                        <td>3523</td>
                        <td>2223</td>
                        <td>2531</td>
                        <td>3342</td>
                        <td>4521</td>
                        <td>6234</td>
                        <td>5434</td>
                    </tr>
                </tbody>
            </table>
            
            
      </div>
  </div>
</div>
<?php $this->endWidget();?>
</div>
<div class="span-13 last">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Line Chart',
));
?>
<div class="chart3">
    <div>
        <div class="text">
            <table class="myChart">
                <thead>
                    <tr>
                        <th></th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>Quotes</th>
                        <td>39523</td>
                        <td>26123</td>
                        <td>29031</td>
                        <td>34342</td>
                        <td>48321</td>
                        <td>42234</td>
                    </tr>
                    <tr>
                        <th>Sales</th>
                        <td>34523</td>
                        <td>22123</td>
                        <td>25031</td>
                        <td>30342</td>
                        <td>45321</td>
                        <td>46234</td>
                    </tr>
                </tbody>
            </table>
            
            
        </div>
    </div>
</div>
<?php $this->endWidget();?>
</div>-->


<!--<div class="flash-notice span-22 last">
<p>This is a "static" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>
</div>-->

</div>