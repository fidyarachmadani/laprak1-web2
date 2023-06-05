<?php

namespace app\controllers;
use app\models\Mahasiswa119;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa119Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa119::find(),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTambah()
    {
        $mahasiswa119 = new Mahasiswa119;
        $mahasiswa119->nim119 = '60200121119-' .rand(10,99);
        $mahasiswa119->nama119 = 'Fidya Rachmadani NH';
        $mahasiswa119->kelas119 = 'C';
        $mahasiswa119->status119 = 'Baru';
        if ($mahasiswa119->save()){
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }


    public function actionUpdate($id){
        $mahasiswa119 = Mahasiswa119::findOne($id);
        if($mahasiswa119!== null){
            $mahasiswa119->kelas119 = 'D';
            $mahasiswa119->status119 = 'Update';
            $mahasiswa119->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa119 = mahasiswa119::findOne($id);
        if ($mahasiswa119->delete()) {
            return $this->redirect(['index']);
            }
            else{
            var_dump($mahasiswa119->getError());
            die();
            }
    }

    public function actionView($id){
        return $this->render('view', [
            'model' => Mahasiswa119::findOne($id),
        ]);
    }

}
