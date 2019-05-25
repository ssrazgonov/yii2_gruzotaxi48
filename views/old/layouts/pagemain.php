<?php   
use yii\helpers\Url; 
use app\assets\AppAsset;

AppAsset::register($this);
?>e

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
  <title><?= $this->title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/animate.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="/css/style.css">   
  <?php $this->head() ?> 
</head>
<body>
  <header class="headmain">
    <div class="upperhead ">
      <div class="container-fluid">      
        <div class="row">
          <div class="contacts col-md-6">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <p>+7 (905) 680-48-06</p>
            <i class="fa  fa-phone" aria-hidden="true"></i>
            <p>71-51-04</p>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <p>gruzotaxi48@gmail.com</p>
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <p>24/7</p>
          </div>
          <div class="social col-md-6">
            <a href="https://ok.ru/group/58867768361002"><i class="fa fa-odnoklassniki-square fa-2x" aria-hidden="true"></i></a>
            <a href="https://vk.com/gruzotaksi48"><i class="fa fa-vk fa-2x" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="bottomhead">
      <div class="container-fluid">
        <div class="row">
          <nav class="navbar navbar-expand-lg navbar-light navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">Грузотакси 48</a>
            <div class="collapse navbar-collapse" id="navbarToggler">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link upperhead-nav" href="<?= Url::to(['page/view', 'id' => '1'])?>">О нас<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link upperhead-nav" href="<?= Url::to(['page/view', 'id' => '2'])?>">Контакты</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1 class="headline"><?= $this->title ?></h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  <?= $content ?>
  <div class="upperhead ">
    <div class="container-fluid">      
      <div class="row">
        <div class="contacts col-md-6">
          <i class="fa fa-mobile" aria-hidden="true"></i>
          <p>+7 (905) 680-48-06</p>
          <i class="fa  fa-phone" aria-hidden="true"></i>
          <p>71-51-04</p>
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <p>gruzotaxi48@gmail.com</p>
          <i class="fa fa-clock-o" aria-hidden="true"></i>
          <p>24/7</p>
        </div>
        <div class="social col-md-6">
          <a href="https://ok.ru/group/58867768361002"><i class="fa fa-odnoklassniki-square fa-2x" aria-hidden="true"></i></a>
          <a href="https://vk.com/gruzotaksi48"><i class="fa fa-vk fa-2x" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>

  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>