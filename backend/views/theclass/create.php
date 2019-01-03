<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Theclass */

$this->title = '添加班级';
$this->params['breadcrumbs'][] = ['label' => '班级', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theclass-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
