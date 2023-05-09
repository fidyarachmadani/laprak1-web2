<?php

namespace app\controllers;

class KrsMahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionSemester($id)
    {
        return "<h1> hehe " . $id . " <h1>";
    }
}
