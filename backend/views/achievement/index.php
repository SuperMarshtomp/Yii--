<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Teacher;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AchievementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '成绩';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="achievement-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php 
    ?>

    <p>
        <?= Html::a('添加考试', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'exam_name',
            'student_id',
            ['attribute'=>'teacher_name',
        	'label'=>'负责老师',
        	'value'=>'teacher.name',
    		],
            'score',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
