<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Repairs */
/* @var $form ActiveForm */
?>
<div class="repairs col-md-9">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'type') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'star') ?>
        <?= $form->field($model, 'describe') ?>
        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'place') ?>
        <?= $form->field($model, 'photo') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'engineer') ?>
        <?= $form->field($model, 'comment') ?>
        <?= $form->field($model, 'time') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- repairs -->
