<?php

use yii\helpers\Html;

$this->title = '提交报修';
$this->params['breadcrumbs'][] = ['label' => '报修', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repairs-create col-md-9">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
