<?php
    use app\models\MahasiswaNim;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;
?>
<div>
    <h1><?= Html::encode($this->title)?></h1>

    <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' =>[
                'id',
                'nim',
                'nama',
                'kelas',
                'jurusan',
                'profileNim.foto_profile',
                [
                    'class'=> ActionColumn::className(),
                    'urlCreator' =>function($action, MahasiswaNim $model){
                        return Url::toRoute([$action, 'id' => $model ->id]);
                    }
                ],
            ],
        ]);
    ?>

    <p>
        <a href="mahasiswa-nim/tambah" class="btn btn-primary">Tambah Mahasiswa</a>
    </p>
</div>