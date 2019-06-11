<?php
namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionTest($message = 'Go to hell!')
    {
        return $this->render('test', ['message' => $message]);
    }
}