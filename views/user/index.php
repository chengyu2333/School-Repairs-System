<?php

use yii\helpers\Html;
use yii\grid\GridView;


$this->title = '负责人';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index col-md-9">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('创建负责人', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'Id',
            'username',
//            'password',
            'name',
//            'phone',
//             'type',
             'power',
//             'comment',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
