<?php
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;
?>

<p>
     <?= Html::a('Mahasiswa Baru', ['tambah'], ['class' => 'btn btn-primary']) ?>
</p>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' =>[
                ['class' => SerialColumn::className()],
            'id119',
            'nim119',
            'nama119',
            'kelas119',
            'status119',
            [
                'class'=> ActionColumn::className(),
                'template' => '{view} {update} {delete}',
                
            ],
        ],
    ]);
?>
