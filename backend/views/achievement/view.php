<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Achievement */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '成绩', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="achievement-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定删除该条成绩？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'exam_name',
            'student_id',
            [
                'label'=>'负责老师',
                'value'=>$model->teacher->name,
            ],
            [
                'label'=>'学生姓名',
                'value'=>$model->student->name,
            ],
            //'teacher_id',
            [
                'label'=>'科目',
                'value'=>$model->teacher->subject0->name,
            ],
            'score',
        ],
    ]) ?>

</div>
