<?php

namespace app\controllers;
use app\models\Pemilikbengkel;
use\yii\data\ActiveDataProvider;

class PemilikbengkelController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Pemilikbengkel::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $pemilikbengkel = new Pemilikbengkel;
        $pemilikbengkel->id = '10'.md5(microtime());
        $pemilikbengkel->username = 'fide';
        $pemilikbengkel->name = 'Fidya Rachmadani';
        $pemilikbengkel->tgl_lahir = '2003-11-19';
        $pemilikbengkel->no_telp = '08212182412';
        if ($pemilikbengkel->save()){
            return $this->redirect(['index']);
        }
        else {
            ver_dump($pemilikbengkel->getErrors());
            die();
        }
    }

    public function actionUpdate($id)
    {
        $pemilikbengkel = Pemilikbengkel::findOne($id);
        $pemilikbengkel->no_telp = '08212182219';
        if ($pemilikbengkel->save()){
            return $this->redirect(['index']);
        }
        else {
            ver_dump($pemilikbengkel->getErrors());
            die();
        }
    }

    public function actionDelete($id)
    {
        $pemilikbengkel = Pemilikbengkel::findOne($id);
        if ($pemilikbengkel->save()){
            return $this->redirect(['index']);
        }
        else {
            ver_dump($pemilikbengkel->getErrors());
            die();
        }
    }

}