<?php use yii\bootstrap4\ActiveForm;
  use yii\helpers\Html;
  use yii\bootstrap4\Alert;
  ?>

<?php $this->title = $serviceItem['name'] ?>
<section class="section-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 page-img">
          <img src="/img/flat.jpg" alt="">
        </div>
        <div class="col-md-8">
          <p><?= $serviceItem['content']?></p>
        </div>
        <div class="col-md-12 form-shell">
          <div class="mainform mainform-black">
            <?php $form = ActiveForm::begin(); ?>
            <h2>ЗАКАЗАТЬ МАШИНУ</h2>
            
            <?php if( Yii::$app->session->getFlash('success')):?>
            <div class="alert alert-success" role="alert">
              Ваша заявка принята
            </div>
            <?php endif; ?>
            
            
            <?= $form->field($contactForm, 'name')->input('name', ['placeholder' => "Ваше Имя"])->label(false) ?>
            <?= $form->field($contactForm, 'phone')->input('phone', ['placeholder' => "Ваш телефон"])->label(false) ?>
            <?= $form->field($contactForm, 'description')->textInput()->input('description', ['placeholder' => "Ваше сообщение"])->label(false) ?>
            <?= Html::submitButton('Сделать заявку', ['class' => 'btn btn-secondary'])?>
            <?php $form = ActiveForm::end(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>