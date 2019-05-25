<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Service;
use yii\web\BadRequestHttpException;

class SiteController extends Controller
{
    public $layout = "main";
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex()
    {   
        $service = new Service();
        
        $contactForm = new ContactForm();
        
        if ( $contactForm->load(Yii::$app->request->post()) && $contactForm->validate() ) {
           
            $formData = Yii::$app->request->post();
             
            $result = Yii::$app->mailer->compose('/mailer/template', ['formData' => $formData, 'imageFileName' => 'img/mailbg.jpg'])
                ->setFrom(Yii::$app->params['adminEmail'])
                ->setTo(Yii::$app->params['adminEmails'])
                ->setSubject(Yii::$app->params['mailSubject'].' '.date('Y-m-d H:i:s'))
                ->send();
            
            if($result) {
                Yii::$app->session->setFlash('success', 'Сохранено');
            }else {
                Yii::$app->session->setFlash('alert', 'Ошибка отправки');
            }
        }
        
        $serviceList = $service->find()->all();
        
        return $this->render('index', ['serviceList' => $serviceList, 'contactForm' => $contactForm]);
    }

    // создаем экшн

    public function actionAbout()
    {   
        $this->layout = 'pagemain';
        return $this->render('about');
    }

    public function actionContacts()
    {
        $this->layout = 'pagemain';
        return $this->render('contact');
    }

}