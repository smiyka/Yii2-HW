<?php
namespace frontend\controllers;

use Yii;
use frontend\models\Contact;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        $phone = Yii::$app->request->get('phone');
        $email = Yii::$app->request->get('email');

        $contact = new Contact();

        $contact->setEmail($email);
        $contact->setPhone($phone);


        return $this->render('index', ["contact"=>$contact]);
    }
    public function actionUser()
    {
        $model=new UserForm;
        if($model->load(Yii::$app->request->post()) && $model->valideate())
        {

        }
        else
        {
            return $this->render('userForm',['model'=>$model] );
        }
    }


}
