<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <h1>Вітаємо!</h1>

    <h3>Щоб зареєструватися до лякаря, просимо заповнити форму:</h3>

    <p>

        <?php if (empty($model->name)): ?>
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
        <?= $form->field($model, 'fb_url')->textInput()->label('Facebook URL') ?>
        <?= $form->field($model, 'doctor')->dropdownList(['terapevt' => 'Terepevt', 'hirurg' => 'Hirurg']); ?>
        <?= $form->field($model, 'insurance')->checkbox() ?>
        <?= $form->field($model, 'first_visit')->radioList(['1' => 'Yes', '0' => 'No']) ?>
        <?= $form->field($model, 'image')->fileInput() ?>
        <?= $form->field($model, 'comment')->textarea() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Вход', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end() ?>
    <?php else: ?>

        <p>Name: <?= $model->name ?></p>
        <p>Email: <?= $model->email ?></p>
        <p>Phone: <?= $model->phone ?></p>
        <?php if (!empty($model->fb_url)): ?>
            <p>Facebook: <a href="<?= $model->fb_url ?>"><?= $model->fb_url ?></a></p>
        <?php endif ?>
        <p>Doctor: <?= $model->doctor ?></p>

        <p>
            Insurance: <?php echo $model->insurance ? 'yes' : 'no'; ?>
        </p>
        <p>
            First visit: <?php echo $model->first_visit ? 'yes' : 'no'; ?>
        </p>
        <?php if (!empty($model->comment)): ?>
            <p>Comment:<?= $model->comment ?></p>
        <?php endif ?>

        <p><img src="/uploads/<?= $model->image ?>"></p>
    <?php endif ?>

</div>
