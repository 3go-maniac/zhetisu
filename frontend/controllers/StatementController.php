<?php

namespace frontend\controllers;


use yii\web\Controller;

class StatementController extends Controller
{
    public function actionIndex()
    {
        return $this->redirect('list');
    }

    public function actionList()
    {
        return $this->render('list');
    }
}