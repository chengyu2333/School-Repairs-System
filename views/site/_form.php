<?php
use app\models\Type;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
?>

<div class="repairs-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?php
    $type = Type::find()->select(['id','type'])->asArray()->all();
    $items = array();
    foreach ($type as $i){
        $items[$i['id']] = $i['type'];
    }
    ?>
    <?= $form->field($model,'type')->dropDownList($items,['required' => true])?>

    <?= $form->field($model, 'title')->textInput(['required' => true]) ?>

    <?= $form->field($model, 'describe')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'place')->textInput(['required' => true]) ?>


    <?= $form->field($model, 'photo')->fileInput() ?>

    <?= $form->field($model, 'name')->textInput(['required' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true,'type'=>'email']) ?>

    <?= $form->field($model, 'time')->textInput(['value' => date('Y-m-d h:m:s'),'disabled'=>'true']) ?>

    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
    ]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '提交' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
