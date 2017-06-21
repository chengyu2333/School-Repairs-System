<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->type;
$this->params['breadcrumbs'][] = ['label' => '类型', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-view col-md-9">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定要删除么?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id' ,
            'type',
            'describe',
        ],
    ]) ?>

</div>
