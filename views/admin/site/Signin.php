<?php 
use yii\bootstrap4\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

  <h1 class="h3 mb-3 font-weight-normal">Пожалуйста войдите</h1>

  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="login">

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="passwd">

  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">© 2019</p>

<?php $form = ActiveForm::end(); ?>