<?php
namespace app\controllers\admin;

use Yii;
use yii\web\Controller;
use app\models\Service;
use app\models\User;
use yii\filters\AccessControl;

class ServiceController extends Controller 
{
	public $layout = "admin/main";

	public function beforeAction($action)
	{	
		Yii::$app->user->loginUrl = ['admin/sign-in'];
	    if (parent::beforeAction($action)) {
	        // If you want to change it only in one or few actions, add additional check
	    	
	        Yii::$app->user->loginUrl = ['admin/sign-in'];

	        return true;
	    } else {
	        return false;
	    }
	}

	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => false,
                        'actions' => ['new'],
                        'roles' => ['?'],
         //                'matchCallback' => function ($rule, $action) {
					    //     return $this->redirect('/');
					    // }
                    ],
                    [
                        'allow' => true,
                        'actions' => ['new'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

	public function actionNew() {

        $service = new Service();
        
        if ( $service->load(Yii::$app->request->post()) && $service->validate() ) {
        	
			$service->attributes = Yii::$app->request->post()['Service'];
			
        	$service->save();
        }


		return $this->render('serviceNew');
	}
}