<?php

use yii\helpers\Html;


$this->title = '创建负责人';
$this->params['breadcrumbs'][] = ['label' => '负责人', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create col-md-9">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
