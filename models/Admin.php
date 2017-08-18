<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Admin extends Model
{
    public $title;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['title'], 'required'],
            // email has to be a valid email address
            // ['email', 'email'],
            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    public function init()
    {
        $data = unserialize(file_get_contents(__DIR__ . '/data'));
        $this->load(['Admin'=>$data]);
    }

    public function save()
    {

        file_put_contents(__DIR__ . '/data', serialize($this->attributes));
        return true;

    }
}
