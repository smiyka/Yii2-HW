<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "visits".
 *
 * @property integer $id
 * @property integer $doctor_id
 * @property integer $client_id
 */
class Visit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visits';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['doctor_id', 'client_id'], 'required'],
            [['doctor_id', 'client_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'doctor_id' => 'Doctor ID',
            'client_id' => 'Client ID',
        ];
    }

    public function getDoctors()
    {
        return $this->hasMany(Doctor::className(), ['doctor_id' => 'id']);
    }

    public function getClients()
    {
        return $this->hasMany(Client::className(), ['client_id' => 'id']);
    }
}