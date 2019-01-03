<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Achievement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="achievement-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    /*
    $allStatus = (new \yii\db\Query())
	->select(['name','teacher_id'])
    ->from('teacher')
    ->all();

    echo "<pre>";
    print_r($allStatus);
    echo "</pre>";

    exit(0);*/

        // $stuquery = Student::find()->indexBy('student_id')->all();
        // $terquery = Teacher::find()->indexBy('teacher_id')->all();

        
        // foreach($stuquery as $key=>$stu)
        // {
        //     foreach($terquery as $key=>$ter){
                
        //         $model->student_id = $stu->student_id;
        //         $model->teacher_id = $ter->teacher_id;

        //         $model->save();

        //         echo "<pre>";
        //         print_r($model);
        //         echo "</pre>";
        //         // $model->student_id = 201800001;
        //         // $model->teacher_id = 1003;
        //     }
        // }

    ?>

    <?= $form->field($model, 'exam_name')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
