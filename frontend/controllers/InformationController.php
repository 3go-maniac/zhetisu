<?php

namespace frontend\controllers;


use yii\web\Controller;

class InformationController extends Controller
{
    public function actionIndex()
    {
        return $this->redirect('');
    }

    public function actionForInvestors()
    {
        return $this->render('for-investors');
    }

    public function actionForShareholders()
    {
        return $this->render('for-shareholders');
    }
}