<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Achievement */

$this->title = '添加考试';
$this->params['breadcrumbs'][] = ['label' => '成绩', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="achievement-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
