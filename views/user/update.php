<?php

use yii\helpers\Html;


$this->title = '修改负责人: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '负责人', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="user-update col-md-9">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
