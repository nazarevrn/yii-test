<?php
namespace app\controllers;

use yii\web\Controller;

class Test2Controller extends Controller
{
    public function actionTest($message = 'Say it one more time!')
    {
        return $this->render('test', ['message' => $message]);
    }
}