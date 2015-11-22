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
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected  $email;
    /**
     * @var string
     */
    protected  $phone;
    /**
     * @var array
     */
    protected $doctor;
    /**
     * @var bool
     */
    protected $answer;
    /**
     * @var bool
     */
    protected $insurance;
    /**
     * @var string
     */
    protected $comment;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name)
    {
        return $this->name = $name;
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

    /**
     * @return mixed
     */
    public function getDoctor()
    {
        return implode(', ', $this->doctor);
    }

    /**
     * @param $doctor
     */
    public function setDoctor($doctor)
    {
        $this->doctor = $doctor;
    }

    /**
     * @return boolean
     */
    public function isAnswer()
    {
        return $this->answer;
    }

    /**
     * @param boolean $answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    /**
     * @return boolean
     */
    public function isInsurance()
    {
        return $this->insurance;
    }

    /**
     * @param boolean $insurance
     */
    public function setInsurance($insurance)
    {
        $this->insurance = $insurance;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }



}