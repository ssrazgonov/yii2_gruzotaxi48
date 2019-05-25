<?php   use yii\helpers\Url; ?>
<section class="">
    <div class="services">
      <div class="container-fluid">
        <div class="row">
            
          <?php foreach ($serviceList as $service): ?>
          <a href="<?= Url::to( ['service/view', 'id' => $service['id']  ])?>" class="col-md-6 service" style="background-image:url(<?=$service->img ?>)">
            <h2><?=$service->name ?></h2>
            <div class="blackfield"></div>
          </a>
            <?php endforeach; ?>
            
       <div class="col-md-12 prices"><h2>Наши цены</h2></div> 
        <div class="price col-md-4">
          <h3>По городу</h3>
        <div class="icon-price"><i class="fa fa-truck fa-5x" aria-hidden="true"></i></div>
        <div class="price-block">от 500р час</div>
      </div>
      <div class="price col-md-4">
          <h3>По области</h3>
        <div class="icon-price"><i class="fa fa-road fa-5x" aria-hidden="true"></i></div>
        <div class="price-block">договорная</div>
      </div>
      <div class="price col-md-4">
          <h3>Грузчики</h3>
        <div class="icon-price"><i class="fa fa-users fa-5x" aria-hidden="true"></i></div>
        <div class="price-block">300р час</div>
      </div>
      
        </div>
      </div>
    </div>
  </section>