<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '报修', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repairs-view col-md-9">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定要删除吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'type',
            'title',
            'describe:ntext',
            'place',
            'photo',
            'name',
            'email:email',
            'time',
            'status',
            'engineer',
            'comment',
            'star',
        ],
    ]) ?>

</div>
