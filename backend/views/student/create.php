<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Student */

$this->title = '添加学生';
$this->params['breadcrumbs'][] = ['label' => '学生', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
