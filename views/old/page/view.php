
<?php use yii\bootstrap4\ActiveForm;
  use yii\helpers\Html;
  use yii\bootstrap4\Alert;
  ?>


<?php $this->title = $pageItem['title'] ?>

<?= Alert::widget() ?>
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
          <div class="">

            <h2>ЗАКАЗАТЬ МАШИНУ</h2>
            
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($contactForm, 'name') ?>
            <?= $form->field($contactForm, 'phone') ?>
            <?= $form->field($contactForm, 'description') ?>
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary'])?>
            <?php $form = ActiveForm::end(); ?>

          </div>
        </div>
      </div>
    </div>
  </section>
