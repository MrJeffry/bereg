<?
Yii::$app->layout = 'site';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">

    <title><?=$model->title?></title>
    <meta name="description" content="<?=$model->description?>">
    <meta name="keywords" content="<?=$model->keywords?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <link rel="stylesheet" href="css/style.min.css">
    <meta name="theme-color" content="#d1a95e">
    <meta name="msapplication-navbutton-color" content="#d1a95e">
    <meta name="apple-mobile-web-app-status-bar-style" content="#d1a95e">
</head>

<body>

<header class="main-header">
    <video loop autoplay src="/img/video.mp4"></video>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="nav clearfix">
                    <button class="hamburger hamburger-open">
                        <span>toggle menu</span>
                    </button>
                    <nav class="">
                        <a href="#">Главная</a>
                        <a href="#">Расположение</a>
                        <a href="#">План посёлка</a>
                        <a href="#">Типы домов</a>
                        <a href="#">Галерея</a>
                        <a href="#">О компании</a>
                        <a href="#">Контактная информация</a>
                    </nav>
                </div>

                <section class="logo">
                    <h1 class="logo-tile">Солнечный <br>берег</h1>
                    <p>Коттеджный поселок</p>
                </section>
                <h2 class="header-title"><?=$model->header_slogan?></h2>
                <p class="header-desc"><?=$model->header_slogan_desc?></p>

                <div class="header-gallery">
                    <button class="view ">Заказать обзор</button>
                    <div class="header-gallery-item header-gallery-item--text wow flipInX">
                        <h2><?=$model->header_title?></h2>
                        <p><?=$model->header_desc?></p>
                    </div>
                    <div class="header-gallery-item wow flipInX"><img src="<?=$model->header_img?>" alt=""></div>
                    <div class="header-gallery-item wow flipInX"><img src="<?=$model->beside_img?>" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="beside">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="beside-description">
                        <h2><?=$model->beside_title?></h2>
                        <h3><?=$model->beside_slogan?></h3>
                        <p><?=$model->beside_desc?></p>
                    </div>
                </div>
                <div class="beside-items">
                    <div class="beside-item beside-item-aqua wow bounceInUp" style="background: url(<?=$model->beside_item_aqua_img?>) no-repeat;">
                        <img src="<?=$model->beside_item_aqua_img?>" alt="<?=$model->beside_item_aqua_title?>">
                        <div class="desc">
                            <b><?=$model->beside_item_aqua_title?></b>
                            <i><?=$model->beside_item_aqua_desc?></i>
                        </div>
                        <span class="distance"><?=$model->beside_item_aqua_km?><span>км</span></span>
                    </div>
                    <div class="beside-item beside-item-bridge wow flip" style="background: url(<?=$model->beside_item_bridge_img?>) no-repeat;">
                        <img src="<?=$model->beside_item_bridge_img?>" alt="<?=$model->beside_item_bridge_title?>">
                        <span class="distance"><?=$model->beside_item_bridge_km?><span>км</span></span>
                        <div class="desc">
                            <b><?=$model->beside_item_bridge_title?></b>
                            <i><?=$model->beside_item_bridge_desc?> </i>
                        </div>
                    </div>
                    <div class="beside-item beside-item-para wow bounceInUp" style="background: url(<?=$model->beside_item_para_img?>) no-repeat;">
                        <img src="<?=$model->beside_item_para_img?>" alt="<?=$model->beside_item_para_title?>">
                        <span class="distance"><?=$model->beside_item_para_km?><span>км</span></span>
                        <div class="desc">
                            <b><?=$model->beside_item_para_title?></b>
                            <i> <?=$model->beside_item_para_desc?></i>
                        </div>
                    </div>
                    <div class="beside-item beside-item-fish wow bounceInUp" style="background: url(<?=$model->beside_item_fish_img?>) no-repeat;">
                        <img src="<?=$model->beside_item_fish_img?>" alt="Аквапарк">
                        <span class="distance"><?=$model->beside_item_fish_km?><span>км</span></span>
                        <div class="desc">
                            <b><?=$model->beside_item_fish_title?></b>
                            <i><?=$model->beside_item_fish_desc?></i>
                        </div>
                    </div>
                    <div class="beside-item beside-item-wear wow bounceInUp" style="background: url(<?=$model->beside_item_wear_img?>) no-repeat right;">
                        <img src="<?=$model->beside_item_wear_img?>" alt="<?=$model->beside_item_wear_title?>">
                        <div class="desc">
                            <b><?=$model->beside_item_wear_title?></b>
                            <i><?=$model->beside_item_wear_desc?></i>
                        </div>
                        <span class="distance"><?=$model->beside_item_aqua_km?><span>км</span></span>
                    </div>
                    <div class="beside-item beside-item-volcan wow bounceInUp" style="background: url(<?=$model->beside2_item_img?>) no-repeat;">
                        <img src="<?=$model->beside2_item_img?>" alt="<?=$model->beside2_item_title?>">
                        <span class="distance"><?=$model->beside2_item_km?><span>км</span></span>
                        <div class="desc">
                            <b><?=$model->beside2_item_title?></b>
                        </div>
                    </div>
                    <div class="beside-item beside-item-text hidden-xs hidden-md hidden-sm">
                        <p>lorem</p>
                    </div>
                    <div class="beside-item beside-item-serf">
                        <img src="img/windsurfing.jpg" alt="<?=$model->beside2_title?>">
                        <div class="desc-big">
                            <h2><?=$model->beside2_title?></h2>
                            <p><?=$model->beside2_desc?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="infrastructure">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="infrastructure-description">
                        <h2><?=$model->infrastructure_title?></h2>
                        <h3><?=$model->infrastructure_slogan?></h3>
                        <p><?=$model->infrastructure_desc?></p>
                    </div>
                    <div class="infrastructure-items">
                        <div class="infrastructure-item water wow flipInY">
                            <p>Чистая фильтрованная вода в кране</p>
                        </div>
                        <div class="infrastructure-item eco wow flipInY">
                            <p>Экологически чистые продукты местного производства</p>
                        </div>
                        <div class="infrastructure-item sun wow flipInY">
                            <p>Огромное количество солнечных дней в году</p>
                        </div>
                        <div class="infrastructure-item tennis wow flipInY">
                            <p>Свой теннисный корт</p>
                        </div>
                        <div class="infrastructure-item children wow flipInY">
                            <p>Организованная детская площадка</p>
                        </div>
                        <div class="infrastructure-item beach wow flipInY">
                            <p>Свои спуски к морю и уединенный пляж </p>
                        </div>
                        <div class="infrastructure-item breeze hidden-xs hidden-sm hidden-md">
                            <p>За счет близкого расположения к морю, обдувает бриз</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="houses">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="houses_description">
                        <h2>Выберите тип дома</h2>
                    </div>
                    <div class="houses_button">
                        <div class="houses_group houses_group-t1">
                            <input type="radio" name="house-type" class="btn btn-type-1" id="btn-type-1" checked>
                            <label for="btn-type-1">
                                <span class="area">194 М<sup>2</sup></span>
                                <b>ТИП 1</b>
                                <span class="price"><?=$model->house_type_1_price?></span>
                            </label>
                        </div>

                        <div class="houses_group houses_group-t2">
                            <input id="btn-type-2" type="radio" name="house-type" class="btn btn-type-2">
                            <label for="btn-type-2">
                                <span class="area">293 М<sup>2</sup></span>
                                <b>ТИП 2</b>
                                <span class="price"><?=$model->house_type_2_price?></span>
                            </label>
                        </div>
                        <div class="houses_group houses_group-t3">
                            <input id="btn-type-3" type="radio" name="house-type" class="btn btn-type-3">
                            <label for="btn-type-3">
                                <span class="area">375 М<sup>2</sup></span>
                                <b>ТИП 3</b>
                                <span class="price"><?=$model->house_type_3_price?></span>
                            </label>
                        </div>

                        <div class="houses_group houses_group-t4">
                            <input id="btn-type-4" type="radio" name="house-type" class="btn btn-type-4">
                            <label for="btn-type-4">
                                <span class="area">460 М<sup>2</sup></span>
                                <b>ТИП 4</b>
                                <span class="price"><?=$model->house_type_4_price?></span>
                            </label>
                        </div>
                    </div>
                    <div class="hidden-xs hidden-sm hidden-md houses-about houses_about-1">
                        <div class="houses-about-desc clearfix">
                            <h2>Тип 1</h2>
                            <p><?=$model->house_type_1_desc?></p>
                        </div>
                        <div class="houses-about-details">
                            <img src="<?=$model->house_type_1_img1?>" alt="">
                            <table>
                                <tr>
                                    <td>Площадь:</td>
                                    <td><?=$model->house_type_1_area?></td>
                                </tr>
                                <tr>
                                    <td>Этажность :</td>
                                    <td><?=$model->house_type_1_level?></td>
                                </tr>
                                <tr>
                                    <td>Площадь прилегающего участка :</td>
                                    <td><?=$model->house_type_1_area2?></td>
                                </tr>
                                <tr>
                                    <td>Гараж :</td>
                                    <td><?=$model->house_type_1_garage?></td>
                                </tr>
                                <tr>
                                    <td>Количество жилых комнат :</td>
                                    <td><?=$model->house_type_1_room?></td>
                                </tr>
                                <tr>
                                    <td>Санузлы :</td>
                                    <td><?=$model->house_type_1_broom?></td>
                                </tr>
                            </table>
                            <div class="btn_group btn_group--left">
                                <button class="btn btn_gray">Подробнее о технология</button>
                                <button class="btn btn_red" data-toggle="modal" data-target="#myModal">Хочу здесь жить!</button>
                            </div>
                        </div>
                        <div class="houses-about-gallery">
                            <div class="houses-about-gallery-item">
                                <img src="<?=$model->house_type_1_img2?>" alt="">
                            </div>
                            <div class="houses-about-gallery-item">
                                <img src="<?=$model->house_type_1_img3?>" alt="">
                            </div>
                            <div class="houses-about-gallery-item houses-about-gallery-item--floor">
                                <img src="<?=$model->house_type_1_plan1?>" alt="">
                                <b>2 этаж</b>
                            </div>
                            <div class="houses-about-gallery-item houses-about-gallery-item--floor">
                                <img src="<?=$model->house_type_1_plan2?>" alt="">
                                <b>3 этаж</b>
                            </div>
                        </div>
                    </div>
                    <div class="btn_group hidden-lg">
                        <button class="btn btn_red" data-toggle="modal" data-target="#type-modal">Хочу здесь жить!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="plan">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="plan-description">
                        <h2>План поселка</h2>
                        <p>Участки от 11 до 18 соток</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="frame hidden-lg">
            <div class="maps">
                <img src="/img/map.jpg" alt="">
                <div class="maps-button">
                    <button class="button button-25">25</button>
                    <button class="button button-26">26</button>
                    <button class="button button-29">29</button>
                    <button class="button button-32">32</button>
                    <button class="button button-33">33</button>
                    <button class="button button-36">36</button>
                    <button class="button button-37">37</button>
                    <button class="button button-38">38</button>
                    <button class="button button-42">42</button>
                    <button class="button button-43">43</button>
                    <button class="button button-47">47</button>
                    <button class="button button-48">48</button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="frame clearfix">
                        <div class="maps">
                            <img src="/img/map.jpg" alt="">
                            <button class="button button-25">25</button>
                            <button class="button button-26">26</button>
                            <button class="button button-29">29</button>
                            <button class="button button-32">32</button>
                            <button class="button button-33">33</button>
                            <button class="button button-36">36</button>
                            <button class="button button-37">37</button>
                            <button class="button button-38">38</button>
                            <button class="button button-42">42</button>
                            <button class="button button-43">43</button>
                            <button class="button button-47">47</button>
                            <button class="button button-48">48</button>
                        </div>
                    </div>
                    <div class="maps-button">
                        <button class="button button-25">25</button>
                        <button class="button button-26">26</button>
                        <button class="button button-29">29</button>
                        <button class="button button-32">32</button>
                        <button class="button button-33">33</button>
                        <button class="button button-36">36</button>
                        <button class="button button-37">37</button>
                        <button class="button button-38">38</button>
                        <button class="button button-42">42</button>
                        <button class="button button-43">43</button>
                        <button class="button button-47">47</button>
                        <button class="button button-48">48</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="plan_number">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                </div>
            </div>
        </div>
        <div class="plan-detail-table">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="title clearfix">
                            <div class="number">
                                Участок №36
                            </div>
                            <div class="type">
                                Тип 2
                            </div>
                        </div>
                        <div class="desc clearfix">

                            <div class="area"><span>Площадь<br></span>212<sup>2</sup></div>
                            <div class="floors"><span>Этажность<br></span>2 этажа</div>
                            <div class="bathrooms"><span>Санузлы<br></span>2</div>

                            <div class="rooms"><span>Количество жилых комнат: <br></span>Свободная планирока</div>
                            <div class="garage"><span>Гараж: <br></span>Встроенный</div>
                            <div class="ploot"><span>Площадь прилегающего участка: <br></span>12 соток</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="plan-detail">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="plan-detail-text">
                            <?=$model->plan_text1?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="plan-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="plan-gallery_group">
                            <?foreach ($model->plan_img as $img):?>
                            <img src="<?=$img?>" alt="Изображение дома">
                            <?endforeach;?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="village">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="village_description clearfix">
                        <h2>Посёлок</h2>
                        <p>Участки от 11 до 18 соток</p>
                    </div>
                    <div class="village-advantages">
                        <h3><?=$model->village_title?></h3>
                        <ul class="left">
                            <?=$model->village_desc?>
                        </ul>
                        <ul class="right">
                            <?=$model->village_desc2?>
                        </ul>
                    </div>
                    <div class="swiper-container village-swiper hidden-lg">
                        <div class="swiper-wrapper">
                            <?foreach ($model->village_slider as $img):?>
                                <div class="swiper-slide">
                                    <img src="<?=$img?>" alt="">
                                </div>
                            <?endforeach;?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div class="swiper-container village-swiper hidden-xs hidden-sm hidden-md">
                        <div class="swiper-container gallery-top gallery-top-v">
                            <div class="swiper-wrapper">
                                <?foreach ($model->village_slider as $img):?>
                                    <div class="swiper-slide" style="background-image:url(<?=$img?>)"></div>
                                <?endforeach;?>

                            </div>

                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs gallery-thumbs-v">
                            <div class="swiper-wrapper">
                                <?foreach ($model->village_slider as $img):?>
                                    <div class="swiper-slide" style="background-image:url(<?=$img?>)"></div>
                                <?endforeach;?>

                            </div>
                        </div>
                    </div>

                    <div class="village-galery">
                        <div class="village-galery_item village-galery_item-commun">
                            <span>Все коммуникации</span>
                        </div>
                        <div class="village-galery_item village-galery_item-own">
                            <span>Земля в собственности ижс</span>
                        </div>
                        <div class="village-galery_item village-galery_item-heat">
                            <span>Дом с эффективной теплоизоляцией</span>
                        </div>
                    </div>
                    <div class="village-advantages hidden-lg">
                        <h3>Благоустроенная территория</h3>
                        <ul>
                            <li>Все улицы вымощены брусчаткой</li>
                            <li>По&nbsp;бокам деревья</li>
                            <li>Протяженная набережная</li>
                            <li>Детская площадка</li>
                            <li>Спортивная площадка</li>
                            <li>Теннисный корт</li>
                            <li>Камеры видеонаблюдения</li>
                            <li>На&nbsp;территории отсутствуют линии электропередач</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="application">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="application-description">
                        <h2>Оставьте заявку</h2>
                    </div>
                    <form action="GET" class="application-form">
                        <div class="form-group">
                            <input type="text" required placeholder="Ваше имя">
                        </div>
                        <div class="form-group">
                            <input type="number" required placeholder="Ваш телефон">
                        </div>
                        <div class="btn_group">
                            <button class="btn btn_red btn_red-light">Отправить заявку</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="interiors">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="interioirs-description clearfix">
                        <h2>Интерьеры домов</h2>
                        <p>Предлагаем дома с&nbsp;отделкой и&nbsp;без отделки</p>
                        <span><b>Годы постройки:</b> 2012, &minus;13, &minus;14</span>
                    </div>
                    <div class="swiper-container interiors-swiper hidden-lg">
                        <div class="swiper-wrapper">
                            <?foreach ($model->interioirs_slider as $img):?>
                                <div class="swiper-slide">
                                    <img src="<?=$img?>" alt="">
                                </div>
                            <?endforeach;?>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div class="swiper-container  hidden-xs hidden-sm hidden-md">
                        <div class="swiper-container gallery-top gallery-top-i">
                            <div class="swiper-wrapper">
                                <?foreach ($model->interioirs_slider as $img):?>
                                    <div class="swiper-slide" style="background-image:url(<?=$img?>)"></div>
                                <?endforeach;?>

                            </div>

                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs gallery-thumbs-i">
                            <div class="swiper-wrapper">
                                <?foreach ($model->interioirs_slider as $img):?>
                                    <div class="swiper-slide" style="background-image:url(<?=$img?>)"></div>
                                <?endforeach;?>

                            </div>
                        </div>
                    </div>

                    <div class="interioirs-galery">
                        <div class="interioirs-galery_item interioirs-galery_item-commun">
                            <span>Низкие коммунальные платежи</span>
                        </div>
                        <div class="interioirs-galery_item interioirs-galery_item-own">
                            <span>Свидетельство на дом и землю</span>
                        </div>
                        <div class="interioirs-galery_item interioirs-galery_item-heat">
                            <span>Отапливаемые гаражи</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="accomplishment">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="accomplishment-description">
                        <h2>Инфраструктура</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="accomplishment-items">
            <div class="accomplishment-item accomplishment-item-school">
                <div class="title clearfix">
                    <span class="name">Школа</span>
                    <span class="distance">1 км</span>
                </div>
                <p><?=$model->infrastructure_school?></p>
            </div>
            <div class="accomplishment-item accomplishment-item-hospitel">
                <div class="title clearfix">
                    <span class="name">Больница</span>
                    <span class="distance">20 км</span>
                </div>
                <p><?=$model->infrastructure_hospital?></p>
            </div>
            <div class="accomplishment-item accomplishment-item-baby clearfix">
                <p><?=$model->infrastructure_kindergarten?></p>
                <div class="title clearfix">
                    <span class="name">Детский сад</span>
                    <span class="distance">600 м</span>
                </div>
            </div>
            <div class="accomplishment-item accomplishment-item-wear">
                <p><?=$model->infrastructure_sea?></p>
                <div class="title clearfix">
                    <span class="name">Море</span>
                    <span class="distance">100 м</span>
                </div>
            </div>
            <div class="accomplishment-item-float">
                <ul>
                    <?=$model->infrastructure_center?>
                </ul>
                <div class="btn_grop">
                    <button class="btn btn_red btn_red-light" data-toggle="modal" data-target="#order-modal">Хочу здесь жить!</button>
                </div>
            </div>
        </div>
    </section>
    <section class="map">
        <div class="map-description">
            <h2>Местоположение</h2>
        </div>
    </section>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <section class="logo footer">
                    <h1 class="logo-tile">Солнечный <br>берег</h1>
                    <p>Коттеджный поселок</p>
                </section>
                <nav class="">
                    <a href="#">Главная</a>
                    <a href="#">Расположение</a>
                    <a href="#">План посёлка</a>
                    <a href="#">Типы домов</a>
                    <a href="#">Галерея</a>
                    <a href="#">О компании</a>
                    <a href="#">Контактная информация</a>
                </nav>
                <a href=""><?=$model->footer_phone?></a>
                <p><?=$model->footer_text?></p>
                <nav class="footer-nav">
                    <ul>
                        <li><a>Политика конфеденциальности</a></li>
                        <li><a>Условия возврата</a></li>
                        <li><a>Публичная оферта</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <button class="btn top">
        1
    </button>
</footer>
<div class="modals">

    <div class="type-modal modal fade" tabindex="-1" role="dialog" id="type-modal">
        <button class="close" data-dismiss="modal" aria-label="Close">Х</button>
        <div class="title">
            <div class="desc">
                <span>1 тип</span>
                <span>194 2</span>
            </div>
            <div class="info">
                Инфраструктура поселка включает контрольно-пропускной пункт и гостевую парковку. В вечернее и ночное время поселок освещается
                уличными фонарями.
            </div>
        </div>

        <div class="images">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>

        <div class="about">
            <table>
                <tr>
                    <td>Площадь</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Этаэность</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="btn-group">
            <a href="" class="btn">Подробнее о технологиях</a>
            <button class="btn" data-toggle="modal" data-target="#order-modal">Хочу здесь жить!</button>
        </div>
    </div>


    <div class="order-modal modal fade" tabindex="-1" role="dialog" id="order-modal">
        <button class="close" data-dismiss="modal" aria-label="Close">Х</button>

        <div class="logo"></div>
        <h2></h2>

        <form action="">
            <div class="form-group">
                <input type="text">
            </div>
            <div class="form-group">
                <input type="text">
            </div>
            <button class="red">Отправить заявку</button>
        </form>
        <a href="">Политика конфедициальности</a>
    </div>
</div>
<script src="js/script.js"></script>
</body>

</html>