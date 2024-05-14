<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property string $id_anggota
 * @property string $nama
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $hobi
 * @property string $alamat
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_anggota', 'nama', 'tanggal_lahir', 'jenis_kelamin', 'hobi', 'alamat'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['jenis_kelamin', 'alamat'], 'string'],
            [['id_anggota'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 50],
            [['hobi'], 'safe'],
            [['id_anggota'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anggota' => 'Id Anggota',
            'nama' => 'Nama',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'hobi' => 'Hobi',
            'alamat' => 'Alamat',
        ];
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
            if(is_array($this->hobi)){
                $this->hobi = implode(', ',$this->hobi);
            }
            return true;
        }

        return false;
    }
}
