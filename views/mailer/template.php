
<div style="padding: 52px; color: white; background-image: url(<?= $message->embed($imageFileName); ?>); background-size: 37%;">
    <h1 style="text-align: center; color: white;">К вам поступило обращение с сайта gruzotaksi48.ru</h1>

<p style="font-size: 18px">Имя: <?= $formData['ContactForm']['name']?></p>

<p style="font-size: 18px">Телефон: <?= $formData['ContactForm']['phone']?></p>

<p style="font-size: 18px">Сообщение: <?= $formData['ContactForm']['description']?></p>
</div>