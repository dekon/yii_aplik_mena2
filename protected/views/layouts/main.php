<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	
	
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php echo "<div style='margin-left:160pt;width:300pt; height:100pt;background-color:purple;'> </div>";?>
<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->


<!-- ? php	echo CHtml::image('images/help.png') ; ?-->

<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'mydialog',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Dialog box 1',
        'autoOpen'=>false,
		
    ),
));

    echo 'dialog content here';

$this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
//echo CHtml::link('open dialog', '#', array(
  // 'onclick'=>'$("#mydialog").dialog("open"); return false;',
//)); 
?>


	<img onmouseover = '$("#mydialog").dialog("open"); return false;' onmouseout='$("#mydialog").dialog("close"); return false;' id='pomoc' name='pomoc' src='images/help.png' style='top:145px;right:200px;position:absolute;width:32px;height:32px;'> </img> 
<div class="form">
<?php echo CHtml::beginForm(); ?>
 


    <div class="row" style="right:30px;position:absolute;">
        <?php echo CHtml::textField('idz_do' , '' , array('autocomplete' => 'on' ,'style' => 'top:10px;right:130px;position:absolute;width:200px;') ); ?>
       
    </div>

 
 <!--   <div class="row submit">
        < ? php echo CHtml::submitButton('Zapisz'); ?>
    </div> -->
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->

<?php
if($_POST['idz_do'])
{
$dziel = explode(' ' ,$_POST['idz_do']);
//echo $_POST['idz_do'] ;

if(is_numeric($dziel[0]) )
    $kamp = '4En_'.$dziel[0].'_04_2012' ;
	else
	$kamp = $dziel[0] ;
	
echo $kamp.'--'.$dziel[1].'--'.$dziel[2].'</br>' ;
die;

Yii::app()->request->redirect($_POST['idz_do'].'&imie=ImieMe');

}
?>
	<div id="mainMbMenu">
		<?php    $this->widget('ext.mbmenu.MbMenu',array( //$this->widget('ext.emenu.EMenu',array( 
		   // 'theme' => 'lwis',
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index'),
				      'items' => array( array('label'=>'  Home', 'url'=>array('/site/index') ) , array('label'=>'Domek', 'url'=>array('/site/index') ), array('label'=>'Dom', 'url'=>array('/site/index') ))
				      ),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),
				       'items' => array( array('label'=>'  Home', 'url'=>array('/site/index') ) , array('label'=>'Domek', 'url'=>array('/site/index'),'items' => array( array('label'=>'  Home', 'url'=>array('/site/index') ) , array('label'=>'Domek', 'url'=>array('/site/index') ), array('label'=>'Dom', 'url'=>array('/site/index') )) ), array('label'=>'Dom', 'url'=>array('/site/index') ))
				     ),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'items' => array( array('label'=>'  Home', 'url'=>array('/site/index') ) , array('label'=>'Domek', 'url'=>array('/site/index') ), array('label'=>'Dom', 'url'=>array('/site/index') )  ) ),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'ajaxLink', 'url'=>array('/site/linkajax')),
				array('label'=>'Przekieruj', 'url'=>array('/site/Przekieruj')),
				
			),
		)); ?>
	</div>
	<div id="mainMbMenu">
		<?php    $this->widget('ext.mbmenu.MbMenu',array( //$this->widget('ext.emenu.EMenu',array( 
		   // 'theme' => 'lwis',
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index'),
				      'items' => array( array('label'=>'  Home', 'url'=>array('/site/index') ) , array('label'=>'Domek', 'url'=>array('/site/index') ), array('label'=>'Dom', 'url'=>array('/site/index') ))
				      ),
				
			),
		)); ?>
	</div><br><br><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
<script type="text/javascript"> 
$(document).ready(function(){
$('#idz_do').focus();


	//$(function() {
		//$( "#dialog" ).dialog();
	//});
	
	/*var $dialog = $('<div></div>')
			.html('This dialog will show every time!')
			.dialog({
				autoOpen: false,
				title: 'Basic Dialog'
			});   
			*/
	
	
	
});



</script>
</body>
</html>