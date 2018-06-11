<?php

namespace frontend\controllers;


use backend\models\Info;
use yii\web\Controller;

class StatementController extends Controller
{
    public function actionIndex()
    {
        return $this->redirect('list');
    }

    public function actionList()
    {
        $docs = Info::find()->where(['type' => Info::STATEMENT])->orderBy(['id' => 'DESC'])->all();
        return $this->render('list', [
            'docs' => $docs
        ]);
    }
}