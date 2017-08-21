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
    public $header_img;
    public $header_slogan;
    public $header_slogan_desc;

    //рядом с нами
    public $beside_title;
    public $beside_slogan;
    public $beside_desc;

    public $beside_item_aqua_img;
    public $beside_item_aqua_title;
    public $beside_item_aqua_desc;
    public $beside_item_aqua_km;

    public $beside_item_bridge_img;
    public $beside_item_bridge_title;
    public $beside_item_bridge_desc;
    public $beside_item_bridge_km;

    public $beside_item_para_img;
    public $beside_item_para_title;
    public $beside_item_para_desc;
    public $beside_item_para_km;

    public $beside_item_fish_img;
    public $beside_item_fish_title;
    public $beside_item_fish_desc;
    public $beside_item_fish_km;

    public $beside_item_wear_img;
    public $beside_item_wear_title;
    public $beside_item_wear_desc;
    public $beside_item_wear_km;

    public $beside_img;

    //неподалеку
    public $beside2_title;
    public $beside2_desc;
    public $beside2_text;
    public $beside2_item_img;
    public $beside2_item_title;
    public $beside2_item_km;

    //инфраструктура
    public $infrastructure_title;
    public $infrastructure_slogan;
    public $infrastructure_desc;


    //типы домов
    public $house_type_1_price;
    public $house_type_1_desc;
    public $house_type_1_img1;
    public $house_type_1_img2;
    public $house_type_1_img3;
    public $house_type_1_area;
    public $house_type_1_level;
    public $house_type_1_area2;
    public $house_type_1_garage;
    public $house_type_1_room;
    public $house_type_1_broom;
    public $house_type_1_plan1;
    public $house_type_1_plan2;

    public $house_type_2_price;
    public $house_type_2_desc;
    public $house_type_2_img1;
    public $house_type_2_img2;
    public $house_type_2_img3;
    public $house_type_2_area;
    public $house_type_2_level;
    public $house_type_2_area2;
    public $house_type_2_garage;
    public $house_type_2_room;
    public $house_type_2_broom;
    public $house_type_2_plan1;
    public $house_type_2_plan2;

    public $house_type_3_price;
    public $house_type_3_desc;
    public $house_type_3_img1;
    public $house_type_3_img2;
    public $house_type_3_img3;
    public $house_type_3_area;
    public $house_type_3_level;
    public $house_type_3_area2;
    public $house_type_3_garage;
    public $house_type_3_room;
    public $house_type_3_broom;
    public $house_type_3_plan1;
    public $house_type_3_plan2;

    public $house_type_4_price;
    public $house_type_4_desc;
    public $house_type_4_img1;
    public $house_type_4_img2;
    public $house_type_4_img3;
    public $house_type_4_area;
    public $house_type_4_level;
    public $house_type_4_area2;
    public $house_type_4_garage;
    public $house_type_4_room;
    public $house_type_4_broom;
    public $house_type_4_plan1;
    public $house_type_4_plan2;

    //план поселка
    public $plan_text1;
    public $plan_text2;
    public $plan_img;

    //village
    public $village_title;
    public $village_desc;
    public $village_desc2;
    public $village_slider;

    //interioirs
    public $interioirs_slider;


    //infrastructure desc
    public $infrastructure_school;
    public $infrastructure_hospital;
    public $infrastructure_kindergarten;
    public $infrastructure_sea;
    public $infrastructure_center;


    public $footer_text;
    public $footer_phone;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [[
                'title',
            ], 'required'],
            [
                array_keys($this->attributes), 'string'
            ],
            // email has to be a valid email address
            // ['email', 'email'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [


            //seo
//            'title' => 'Заголовок',
//            'description' => 'Описание',
//            'keywords' => 'Ключевые слова',

            //шапка
            'header_title' => 'Заголовок',
            'header_desc' => 'Описание',
            'header_img' => 'Картинка под описанием',
            'header_slogan' => 'Слоган',
            'header_slogan_desc' => 'Надпись под слоганом',

            //рядом с нами
            'beside_title' => 'Заголовок',
            'beside_slogan' => 'Слоган',
            'beside_desc' => 'Описание',

            'beside_item_aqua_img' => 'Фото',
            'beside_item_aqua_title' => 'Заголовок',
            'beside_item_aqua_desc' => 'Описание',
            'beside_item_aqua_km' => 'Км',

            'beside_item_bridge_img' => 'Фото',
            'beside_item_bridge_title' => 'Заголовок',
            'beside_item_bridge_desc' => 'Описание',
            'beside_item_bridge_km' => 'Км',

            'beside_item_para_img' => 'Фото',
            'beside_item_para_title' => 'Заголовок',
            'beside_item_para_desc' => 'Описание',
            'beside_item_para_km' => 'Км',

            'beside_item_fish_img' => 'Фото',
            'beside_item_fish_title' => 'Заголовок',
            'beside_item_fish_desc' => 'Описание',
            'beside_item_fish_km' => 'Км',

            'beside_item_wear_img' => 'Фото',
            'beside_item_wear_title' => 'Заголовок',
            'beside_item_wear_desc' => 'Описание',
            'beside_item_wear_km' => 'Км',

            'beside_img' => 'Фото справа от заголовка',

            //неподалеку
            'beside2_title' => 'Заголовок',
            'beside2_desc' => 'Описание',
            'beside2_text' => 'Текст',
            'beside2_item_img' => 'Фото',
            'beside2_item_title' => 'Заголовок',
            'beside2_item_km' => 'Км',

            //инфраструктура
            'infrastructure_title' => 'Заголовок',
            'infrastructure_slogan' => 'Слоган',
            'infrastructure_desc' => 'Описание',


            //типы домов
            'house_type_1_price' => 'Цена',
            'house_type_1_desc' => 'Описание',
            'house_type_1_img1' => 'Фото 1',
            'house_type_1_img2' => 'Фото 2',
            'house_type_1_img3' => 'Фото 3',
            'house_type_1_area' => 'Площадь',
            'house_type_1_level' => 'Этажность',
            'house_type_1_area2' => 'Площадь участка',
            'house_type_1_garage' => 'Гараж',
            'house_type_1_room' => 'Комнат',
            'house_type_1_broom' => 'Санузлы',
            'house_type_1_plan1' => 'Фото плана 1',
            'house_type_1_plan2' => 'Фото плана 2',

            'house_type_2_price' => 'Цена',
            'house_type_2_desc' => 'Описание',
            'house_type_2_img1' => 'Фото 1',
            'house_type_2_img2' => 'Фото 2',
            'house_type_2_img3' => 'Фото 3',
            'house_type_2_area' => 'Площадь',
            'house_type_2_level' => 'Этажность',
            'house_type_2_area2' => 'Площадь участка',
            'house_type_2_garage' => 'Гараж',
            'house_type_2_room' => 'Комнат',
            'house_type_2_broom' => 'Санузлы',
            'house_type_2_plan1' => 'Фото плана 1',
            'house_type_2_plan2' => 'Фото плана 2',

            'house_type_3_price' => 'Цена',
            'house_type_3_desc' => 'Описание',
            'house_type_3_img1' => 'Фото 1',
            'house_type_3_img2' => 'Фото 2',
            'house_type_3_img3' => 'Фото 3',
            'house_type_3_area' => 'Площадь',
            'house_type_3_level' => 'Этажность',
            'house_type_3_area2' => 'Площадь участка',
            'house_type_3_garage' => 'Гараж',
            'house_type_3_room' => 'Комнат',
            'house_type_3_broom' => 'Санузлы',
            'house_type_3_plan1' => 'Фото плана 1',
            'house_type_3_plan2' => 'Фото плана 2',

            'house_type_4_price' => 'Цена',
            'house_type_4_desc' => 'Описание',
            'house_type_4_img1' => 'Фото 1',
            'house_type_4_img2' => 'Фото 2',
            'house_type_4_img3' => 'Фото 3',
            'house_type_4_area' => 'Площадь',
            'house_type_4_level' => 'Этажность',
            'house_type_4_area2' => 'Площадь участка',
            'house_type_4_garage' => 'Гараж',
            'house_type_4_room' => 'Комнат',
            'house_type_4_broom' => 'Санузлы',
            'house_type_4_plan1' => 'Фото плана 1',
            'house_type_4_plan2' => 'Фото плана 2',

            //план поселка
            'plan_text1' => 'Текс 1(лево)',
            'plan_text2' => 'Текс 2(низ)',
            'plan_img' => 'Слайдер',

            //village
            'village_title' => 'Заголовок',
            'village_desc' => 'Описание left',
            'village_desc2' => 'Описание right',
            'village_slider' => 'Слайдер',

            //interioirs
            'interioirs_slider' => 'Слайдер',


            //infrastructure desc
            'infrastructure_school' => 'Школа',
            'infrastructure_hospital' => 'Больница',
            'infrastructure_kindergarten' => 'Детский сад',
            'infrastructure_sea' => 'Море',
            'infrastructure_center' => 'По центру',


            'footer_text' => 'Подвал - текс',
            'footer_phone' => 'Подвал - телефон',

        ];
    }

    public function init()
    {
        $data = unserialize(file_get_contents(__DIR__ . '/data'));
        $this->load(['Admin' => $data]);
    }

    public function save()
    {

        file_put_contents(__DIR__ . '/data', serialize($this->attributes));
        return true;

    }
}
