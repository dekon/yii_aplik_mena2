<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

<?php $this->beginWidget('application.extensions.jui.EDialog', 
    array('name'=>'dialogo', 
          'theme'=>'base', 
          'compression'=>'packed', 
          'htmlOptions'=>array('title'=>'Hello dialog'))); ?>
<p>Hello world</p>
<?php $this->endWidget('application.extensions.jui.EDialog'); ?>
 
<?php
$this->beginWidget('application.extensions.jui.EDialog',
   array(
      'name' => 'myDialog',
      'theme' => 'base',
      'htmlOptions'=>array('title'=>'Hello dialog'),
      'options' => array(
         'autoOpen'=>true,
         'show'=>'scale',
      ),
      'buttons' => array(
         "Ok" => 'function(){$(this).dialog("close");}',
         "Cancel" => 'function(){alert("cancel");}'
      ) 
   )
);
?>
<p>Farawell, World :(</p>
<?php $this->endWidget('application.extensions.jui.EDialog'); ?>