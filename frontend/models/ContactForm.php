<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;
use frontend\models\User;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends \yii\db\ActiveRecord
{
    /**
     * This is the model class for table "my_users_doctor".
     *
     * @property integer $id
     * @property string $name
     * @property string $email
     * @property string $phone
     * @property string $fb_url
     * @property string $doctor
     * @property integer $insurance
     * @property integer $first_visit
     * @property string $image
     * @property string $comment
     * @property integer $status
     */
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'my_users_doctor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//             name, email, subject and body are required
            [['name', 'email', 'phone'], 'required'],
            [['name', 'email', 'phone'], 'string', 'max' => 128],
            [['first_visit', 'insurance'], 'boolean'],
            ['first_visit', 'default', 'value' => 0],
            [['doctor', 'comment'], 'string'],
            ['fb_url', 'url'],
            ['phone', 'match', 'pattern' => '/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/'],
//             email has to be a valid email address
            ['email', 'email'],
            [['insurance', 'first_visit'], 'integer'],

//            ['status', 'integer'],
//            ['status', 'default', 'value' => self::STATUS_ACTIVE],
//            ['status', 'in', 'range' => array_keys(self::getStatusesArray())],
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
            'fb_url' => 'Fb Url',
            'doctor' => 'Doctor',
            'insurance' => 'Insurance',
            'first_visit' => 'First Visit',
            'image' => 'Image',
            'comment' => 'Comment',
            //'status' => 'Status',
        ];
    }

    public function upload()
    {
        if ($this->validate() && !empty($this->image)) {
            $this->image->saveAs('uploads/' . $this->image->baseName . '.' . $this->image->extension);
            return true;
        } else {
            return false;
        }
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'customer_id']);
    }

}
