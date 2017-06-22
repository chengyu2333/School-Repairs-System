<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
$message = "";
?>
<div class="site-error">

    <h1>错误</h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>


</div>
