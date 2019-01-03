<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Theclass */

$this->title = $model->class_id;
$this->params['breadcrumbs'][] = ['label' => '班级', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theclass-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->class_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->class_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'class_id',
            'grade',
            'teacher_id',
        ],
    ]) ?>

</div>
