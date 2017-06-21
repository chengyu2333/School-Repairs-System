<?php

use yii\helpers\Html;


$this->title = '修改报修单: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '报修', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="repairs-update col-md-9">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
