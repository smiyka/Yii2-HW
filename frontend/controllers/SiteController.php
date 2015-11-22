<?php
namespace frontend\controllers;

use Yii;
use frontend\models\ContactForm;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        $model = new ContactForm();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            $model->image = UploadedFile::getInstance($model, 'image');

            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                $valid = ActiveForm::validate($model);

                return $valid;
            }

            $model->upload();

        }


        return $this->render('index', ['model' => $model]);
    }

}
