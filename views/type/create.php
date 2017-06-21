<?php

use yii\helpers\Html;


$this->title = '创建类型';
$this->params['breadcrumbs'][] = ['label' => '类型', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-create col-md-9">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
