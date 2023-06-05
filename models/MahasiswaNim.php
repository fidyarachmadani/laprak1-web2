<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_nim".
 *
 * @property int $Id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class MahasiswaNim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_nim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'string', 'max' => 20],
            [['nama', 'jurusan'], 'string', 'max' => 50],
            [['kelas'], 'string', 'max' => 10],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    public function getProfileNim(){
        return $this->hasOne(ProfileNim::class,['id_mahasiswa'=>'id']);
    }
}
