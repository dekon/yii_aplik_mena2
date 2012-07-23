<?php
echo "hej tu przekierowanie gdzie chcesz iœæ?:</br>" ;
?>
<div class="form">
<?php echo CHtml::beginForm(); ?>
 

 
    <div class="row">
        <?php echo CHtml::textField('idz_do' , '' , array('autocomplete' => 'on' ,'style' => 'width:200px') ); ?>
       
    </div>

 
    <div class="row submit">
        <?php echo CHtml::submitButton('Zapisz'); ?>
    </div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->

<?php
if($_POST['idz_do'])
{

Yii::app()->request->redirect($_POST['idz_do'].'&imie=ImieMe');

}
?>


