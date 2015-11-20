<?php
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 15.11.15
 * Time: 17:03
 */

namespace frontend\controllers;


use yii\web\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        return $this->render("index");
    }
}