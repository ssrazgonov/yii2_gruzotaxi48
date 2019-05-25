<?php
namespace app\controllers\admin;

use Yii;
use yii\web\Controller;
use app\models\Service;
use app\models\User;
use yii\filters\AccessControl;

class SiteController extends Controller 
{
	public $layout = "admin/main";

	public function beforeAction($action)
	{	
		Yii::$app->user->loginUrl = ['admin/sign-in'];
	    if (parent::beforeAction($action)) {
	        // If you want to change it only in one or few actions, add additional check
	    	
	        //Yii::$app->user->loginUrl = ['admin/sign-in'];

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
                'only' => ['index'],
                'rules' => [
                    [
                        'allow' => false,
                        'actions' => ['index'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex() {
        return $this->render('Index');
    }

	public function actionSignin() {
		if(Yii::$app->request->post()) {
			$identity = User::findByUsername(Yii::$app->request->post()['login']);

			if($identity->validatePassword(Yii::$app->request->post()['passwd'])) {
				Yii::$app->user->login($identity);
				$this->redirect('/admin');
			}

		}
        return $this->render('Signin');
    }

	
}