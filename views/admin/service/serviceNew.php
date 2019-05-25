<?php 
use app\models\Service;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

?>

<h1>Создание новой услуги в базе данных</h1>

<div class="mainform">

	<?php $contactForm = new Service() ?>
	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($contactForm, 'name')->input('name', ['placeholder' => "Название"])->label(false) ?>
	<?= Html::submitButton('Сохранить услугу', ['class' => 'btn btn-secondary'])?>
	<?php $form = ActiveForm::end(); ?>
</div>