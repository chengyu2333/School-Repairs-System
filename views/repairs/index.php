<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RepairsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '报修列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repairs-index col-md-9">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建报修', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'Id',
            'type',
            'title',
//            'describe:ntext',
            'place',
            // 'photo',
            // 'name',
            // 'email:email',
             'time',
             'status',
            // 'engineer',
            // 'comment',
//             'star',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
