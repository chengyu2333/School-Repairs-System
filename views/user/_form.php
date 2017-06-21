<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Type;
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['required' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['required' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['required' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?php
        $type = Type::find()->select(['id','type'])->asArray()->all();
        $items = array();
        foreach ($type as $i){
            $items[$i['id']] = $i['type'];
        }
        $model->power = 0;
    ?>

    <?= $form->field($model,'type')->checkboxList($items)?>

    <?= $form->field($model, 'power')->radioList(['未审核','工程师','管理员'])?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>