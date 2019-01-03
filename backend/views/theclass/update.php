<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Theclass */

$this->title = '修改班级';
$this->params['breadcrumbs'][] = ['label' => '班级', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->class_id, 'url' => ['view', 'id' => $model->class_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="theclass-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
