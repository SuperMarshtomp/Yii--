<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php
        if (!Yii::$app->user->isGuest)
            echo "<li style='font-size:50px'> 欢迎回来 " . Yii::$app->user->identity->username . "</li>";
        else echo "<li style='font-size:50px'> 请登录 </li>";
    ?>
</div>