<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'user-form-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'gender'); ?>
        <?php echo $form->textField($model,'gender'); ?>
        <?php echo $form->error($model,'gender'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'image_url'); ?>
        <?php echo $form->textField($model,'image_url'); ?>
        <?php echo $form->error($model,'image_url'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cellphone'); ?>
        <?php echo $form->textField($model,'cellphone'); ?>
        <?php echo $form->error($model,'cellphone'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'type'); ?>
        <?php echo $form->textField($model,'type'); ?>
        <?php echo $form->error($model,'type'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'openid'); ?>
        <?php echo $form->textField($model,'openid'); ?>
        <?php echo $form->error($model,'openid'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->textField($model,'username'); ?>
        <?php echo $form->error($model,'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->textField($model,'password'); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'inviter'); ?>
        <?php echo $form->textField($model,'inviter'); ?>
        <?php echo $form->error($model,'inviter'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'birthday'); ?>
        <?php echo $form->textField($model,'birthday'); ?>
        <?php echo $form->error($model,'birthday'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'create_time'); ?>
        <?php echo $form->textField($model,'create_time'); ?>
        <?php echo $form->error($model,'create_time'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'update_time'); ?>
        <?php echo $form->textField($model,'update_time'); ?>
        <?php echo $form->error($model,'update_time'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'status'); ?>
        <?php echo $form->textField($model,'status'); ?>
        <?php echo $form->error($model,'status'); ?>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 