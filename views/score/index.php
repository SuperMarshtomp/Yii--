<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginUser */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\LoginUser;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

?>

<h1><?= Html::encode($this->title) ?></h1>

<p>Please fill out the following fields to login:</p>

<?php $form = ActiveForm::begin([
	'id' => 'login-user',
	'options' => ['class' => 'form-horizontal']
	]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>
	
	
	<?= $form->field($model, 'selector')->radioList([
		0 => "学生",
		1 => "教师",
		2 => "管理员"
	]) ?>
	
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>