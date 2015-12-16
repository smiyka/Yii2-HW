<?php
namespace frontend\controllers;

use common\models\Client;
use common\models\Doctor;
use common\models\Visit;
use Yii;
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
        $model = new Client();
        $visit = new Visit();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            //$model->image = UploadedFile::getInstance($model, 'image');

            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                $valid = ActiveForm::validate($model);

                return $valid;
            }

            //$model->upload();
            $model->save();

            $params = Yii::$app->request->post();
            $doctorsIDS = $params['Visit']['doctor_id'];
            foreach($doctorsIDS as $id){
                $visit = new Visit();
                $visit->doctor_id = $id;
                $visit->client_id = $model->id;
                $visit->save();
            }
        }

        return $this->render('index', [
            'model' => $model,
            'visit' => $visit,
        ]);
    }

}
