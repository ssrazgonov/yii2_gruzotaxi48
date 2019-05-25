<?php 
  use yii\helpers\Url;
?>
<section class="">
    <div class="services">
      <div class="container-fluid">
        <div class="row">
            
          <?php foreach ($serviceList as $service): ?>
          <a href="<?= Url::to(['service/view', "id" => $service['id']])?>" class="col-md-6 service" style="background-image:url(<?=$service->img ?>)">
            <h2><?=$service->name ?></h2>
            <div class="blackfield"></div>
          </a>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>