<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $facebook_url
 * @property integer $insurance
 * @property integer $first_visit
 * @property string $comment
 * @property string $image
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required'],
            [['insurance', 'first_visit'], 'integer'],
            [['comment'], 'string'],
            [['name', 'email', 'phone', 'facebook_url', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'facebooc_url' => 'Facebooc Url',
            'insurance' => 'Insurance',
            'first_visit' => 'First Visit',
            'comment' => 'Comment',
            'image' => 'Image',
        ];
    }

    public function getVisits()
    {
        return $this->hasMany(Visit::className(), ['id' => 'client_id']);
    }


}