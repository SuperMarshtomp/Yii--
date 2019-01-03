<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Achievement */

$this->title = '修改成绩对象';
$this->params['breadcrumbs'][] = ['label' => '成绩表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="achievement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_updateform', [
        'model' => $model,
    ]) ?>

</div>
