<script>
    function select()
        {
                var sel_row=$.fn.yiiGridView.getSelection('pers-grid');
                alert(sel_row);
                $('#Users_CED').val(sel_row);
        }
</script>

<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
    
)); ?>
    

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CODUSER'); ?>
		<?php echo $form->textField($model,'CODUSER'); ?>
		<?php echo $form->error($model,'CODUSER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CED'); ?>
                <?php
                    $modelPers=new Pers;
                    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
                        'id'=>'mydialog',
                        // additional javascript options for the dialog plugin
                        'options'=>array(
                            'title'=>'Dialog box 1',
                            'autoOpen'=>false,
                        ),
                            'htmlOptions'=>array(
                                    'class'=>'shadowdialog'
                        ),
                    ));
                       
                        echo 'dialog content here';
                        //$modelPers=new Pers;
                        $this->widget('zii.widgets.grid.CGridView', array(
                                    'id'=>'pers-grid',
                                    'dataProvider'=>$modelPers->search(),
                                    'filter'=>$modelPers,
                             'selectionChanged'=>'select',
                                    'columns'=>array(
                                            'CED',
                                            'NOM',
                                    ),
                            ));

                    $this->endWidget('zii.widgets.jui.CJuiDialog');

                    // the link that may open the dialog
                    echo CHtml::link('Seleccione persona registrada', '#', array(
                       'onclick'=>'$("#mydialog").dialog("open"); return false;',
                    ));
                     echo $form->textField($model,'CED',array('size'=>30,'maxlength'=>30)); 
                    ?>
            
		<?php echo $form->error($model,'CED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'session'); ?>
		<?php echo $form->textField($model,'session',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'session'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model,'role',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('confirm'=>'Seguro que desea realizar la transacción?')); ?>
             <?php echo CHtml::button('Cancelar', array('submit' => array('index'))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->