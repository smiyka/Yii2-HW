<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;

    public $email;

    public $phone;

    public $doctor;

    public $insurance;

    public $first_visit;

    public $image;

    public $fb_url;

    public $comment;
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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
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
}
