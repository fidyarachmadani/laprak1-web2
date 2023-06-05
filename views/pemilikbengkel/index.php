<?php
    use yii\grid\GridView;
?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' =>[
            'id',
            'username',
            'name',
            'tgl_lahir',
            'no_telp',
        ]
    ])
?>