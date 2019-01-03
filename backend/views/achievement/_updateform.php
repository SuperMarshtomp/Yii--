<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Teacher;

/* @var $this yii\web\View */
/* @var $model common\models\Achievement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="achievement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exam_name') ?>

    <?= $form->field($model, 'student_id')->textInput()?>

    <?= $form->field($model,'teacher_id')
         ->dropDownList(Teacher::find()
                        ->select(['name','teacher_id'])
						->indexBy('teacher_id')
						->column(),
    		   ['prompt'=>'请选择老师']);?>


    <?= $form->field($model, 'score')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
