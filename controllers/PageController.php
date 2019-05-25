<?php

namespace app\controllers; 

use Yii;
use yii\web\Controller;
use app\models\Page;
use app\models\ContactForm;




class PageController extends Controller 
{
    public $layout = "pagemain";
  

    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $page = new Page();
        $contactForm = new ContactForm();

        //Yii::$app->session->setFlash('success', 'Ваша заявка принята');

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

        

        

        $pageItem = $page->find()->where(["id" => $id])->one();

        return $this->render('view', ['pageItem' => $pageItem, 'contactForm' => $contactForm]);
    }

}