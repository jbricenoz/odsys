<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php
        $this->widget('ext.slider.slider', array(
            'container'=>'slideshow',
            'width'=>910, 
            'height'=>340, 
            'timeout'=>6000,
            'infos'=>true,
            'constrainImage'=>true,
            'images'=>array('01.jpg','02.jpg','03.jpg','04.jpg'),
            'alts'=>array('Bienvenido a Odsys Manager System','Its your world, take control','Eduardo Bran Chacon','Joshua Briceño'),
            'defaultUrl'=>'index.php/site/menu'
            )
        );
        ?>


