<?php 
    use yii\bootstrap4\ActiveForm;
    use yii\helpers\Html;
?>


<?php $this->title = $pageItem['title'] ?>

<section class="section-page">
    <div class="container-fluid">
      <div class="row">
        <?php if($pageItem['img']): ?>
        <div class="col-md-4 page-img">
          <img src="<?=$pageItem['img']?>" alt="">
        </div>
      <?php endif; ?>
        <div class="col-md-8">
          <p><?= $pageItem['content']?></p>
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