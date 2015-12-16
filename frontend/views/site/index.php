<?php
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 29.11.15
 * Time: 18:23
 */

use common\models\Doctor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web;


$this->title = 'My Yii Application';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Small Business</title>

<!--    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->

    <!-- Custom Fonts -->
<!--    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"-->
<!--          type="text/css">-->
<!--    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>-->
<!--    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    <!-- jQuery library -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<!---->
<!--    <!-- Latest compiled JavaScript -->-->
<!--    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

</head>


<body>
<div class="site-index">
    <h1>Вітаємо!</h1>

    <h3>Щоб зареєструватися до лікаря, просимо заповнити форму:</h3>

    <p>
        <?php
        $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal', 'enctype' => 'multipart/form-data'],
            'action' => '/',
//                    'enctype' => 'multipart/form-data',
            'enableAjaxValidation' => true,
        ]);
        ?>


        <?= $form->field($model, 'name')->textInput() ?>
        <?= $form->field($model, 'email')->input('email') ?>
        <?= $form->field($model, 'phone')->textInput() ?>
        <?= $form->field($model, 'facebook_url')->textInput()->label('Facebook URL') ?>
        <?= $form->field($model, 'insurance')->checkbox() ?>
        <?= $form->field($model, 'first_visit')->radioList(['1' => 'Yes', '0' => 'No']) ?>
        <?= $form->field($model, 'image')->fileInput() ?>
        <?= $form->field($model, 'comment')->textarea() ?>
        <?= $form->field($visit, 'doctor_id')->dropdownList(
            Doctor::find()->select(['name', 'id'])->indexBy('id')->column(),
            ['multiple'=>'multiple']
        ); ?>


    <div class="form-group ">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end() ?>



</div>
</body>
</html>