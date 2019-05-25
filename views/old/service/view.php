<?php $this->title = $serviceItem['name'] ?>
<section class="section-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 page-img">
          <img src="img/flat.jpg" alt="">
        </div>
        <div class="col-md-8">
          <p><?= $serviceItem['content']?></p>
        </div>
        <div class="col-md-12 form-shell">
          <div class="mainform mainform-black">
            <form action="">
              <h2>ЗАКАЗАТЬ МАШИНУ</h2>
              <input type="text" placeholder="ВАШЕ ИМЯ">
              <input type="text" placeholder="ТЕЛЕФОН">
              <input type="text" placeholder="ОПИСАНИЕ ЗАКАЗА">
              <button class="btn">Сделать заявку</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>