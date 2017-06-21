<?php

use yii\helpers\Html;


$this->title = '修改类型: ' . $model->type;
$this->params['breadcrumbs'][] = ['label' => '类型', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-update col-md-9">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
