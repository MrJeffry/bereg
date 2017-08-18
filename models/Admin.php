<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Admin extends Model
{
    //seo
    public $title;
    public $description;
    public $keywords;

    //шапка
    public $header_title;
    public $header_desc;

    //рядом с нами
    public $beside_item_aqua_img;
    public $beside_item_aqua_title;
    public $beside_item_aqua_desc;
    public $beside_item_aqua_km;

    public $beside_item_bridge_img;
    public $beside_item_bridge_title;
    public $beside_item_bridge_desc;
    public $beside_item_bridge_km;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [[
                'title',
                'description',
            ], 'required'],
            [[
                'title',
                'description',
                'keywords',

                'header_title',
                'header_desc',

                'beside_item_aqua_img',
                'beside_item_aqua_title',
                'beside_item_aqua_desc',
                'beside_item_aqua_km',

                'beside_item_bridge_img',
                'beside_item_bridge_title',
                'beside_item_bridge_desc',
                'beside_item_bridge_km',
            ], 'string'],
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
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',

            'header_title' => 'Заголовок на банере',
            'header_desc' => 'Описание на банере',

            'beside_item_aqua_img' => 'Фото',
            'beside_item_aqua_title' => 'Название',
            'beside_item_aqua_desc' => 'Описание',
            'beside_item_aqua_km' => 'Какие-то километры',

            'beside_item_bridge_img' => 'Фото',
            'beside_item_bridge_title' => 'Название',
            'beside_item_bridge_desc' => 'Описание',
            'beside_item_bridge_km' => 'Какие-то километры',
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
