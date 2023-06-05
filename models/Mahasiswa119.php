<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa119".
 *
 * @property int $id119
 * @property string $nim119
 * @property string $nama119
 * @property string $kelas119
 * @property string $status119
 */
class Mahasiswa119 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa119';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim119', 'nama119', 'kelas119', 'status119'], 'required'],
            [['nim119'], 'string', 'max' => 25],
            [['nama119'], 'string', 'max' => 255],
            [['kelas119'], 'string', 'max' => 10],
            [['status119'], 'string', 'max' => 50],
            [['nim119'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id119' => 'Id119',
            'nim119' => 'Nim119',
            'nama119' => 'Nama119',
            'kelas119' => 'Kelas119',
            'status119' => 'Status119',
        ];
    }
}
