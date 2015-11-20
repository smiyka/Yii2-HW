<?php
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 15.11.15
 * Time: 17:47
 */

namespace frontend\models;


class Contact extends \yii\base\Object
{
    protected $id;
    protected  $email;
    protected  $phone;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


}