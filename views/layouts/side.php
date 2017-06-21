<?php
if (Yii::$app->controller->id!='site') {
    ?>
    <div class="sidebar col-md-3">
        <div class="menu">
            <ul class="list-group">
                <li class="list-group-item active">菜单</li>
                <li class="list-group-item"><a href="index.php?r=user">负责人</a></li>
                <li class="list-group-item"><a href="index.php?r=type">类型</a></li>
                <li class="list-group-item"><a href="index.php?r=repairs">报修</a></li>
            </ul>
        </div>
    </div>
    <?php
}
?>