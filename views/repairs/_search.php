<?php
use app\models\Type;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="repairs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]);
    $type = Type::find()->select(['id','type'])->asArray()->all();
    $items = array();
    foreach ($type as $i){
        $items[$i['id']] = $i['type'];
    }
    ?>

<!--    --><?//= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'type')->dropDownList($items) ?>


    <?= $form->field($model, 'title') ?>

<!--    --><?//= $form->field($model, 'describe') ?>

    <?= $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'time') ?>

    <?php  echo $form->field($model, 'status') ?>

    <?php  echo $form->field($model, 'engineer') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'star') ?>

    <div class="form-group">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
