<?php

namespace app\controllers; 
 
// вот мы унаследовали все методы и свойства, но его еще нужно подключить командой use

use Yii;
use yii\web\Controller;
use app\models\Service;
use app\models\ContactForm;

// давай нормальные ссылки включим, ато так не удобно


class ServiceController extends Controller 
{
    public $layout = "pagemain";
  
    // это просто подготока, htaccess и всякие там css и js должны со слеша в начале начинатся

    public function actionIndex()
    {   
        //ну в общем мы тут или нет сейчас посмотрим почему
        
        $service = new Service();
        
        $serviceList = $service->find()->all();
        
        return $this->render('index', ['serviceList' => $serviceList]);

        // вот мы говорим отобрази нам index, где он будет его искать ? нет
    }

    public function actionView()
    {
        $id = Yii::$app->request->get('id');

        $service = new Service();
        $contactForm = new ContactForm();

        $serviceItem = $service->find()->where(["id" => $id])->one();
        
        

        if ( $contactForm->load(Yii::$app->request->post()) && $contactForm->validate() ) {
            
            
            $formData = Yii::$app->request->post();
             
            $result = Yii::$app->mailer->compose('/mailer/template', ['formData' => $formData, 'imageFileName' => 'img/mailbg.jpg'])
            ->setFrom(Yii::$app->params['adminEmail'])
            ->setTo(Yii::$app->params['adminEmails'])
            ->setSubject(Yii::$app->params['mailSubject'].' '.date('Y-m-d H:i:s'))
            ->send();
            
            if($result) {
                
                Yii::$app->session->setFlash('success', 'Сохранено');
            }
        }
        
        return $this->render('view', ['serviceItem' => $serviceItem, 'contactForm' => $contactForm]);
    }

}