<?php

use yii\helpers\Html;
use yii\widgets\ListView;


$this->title = '类型';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-index col-md-9">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('新建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'list-group-item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->type), ['view', 'id' => $model->Id]);
        },
    ]) ?>
</div>
