<?
Yii::$app->layout = 'site';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">

    <title>Солнечный берег</title>
    <meta name="description" content="">

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
                <h2 class="header-title">Лучшее место для жизни</h2>
                <p class="header-desc">Море, горы, воздух парапланны, водный спорт</p>

                <div class="header-gallery">
                    <button class="view ">Заказать обзор</button>
                    <div class="header-gallery-item header-gallery-item--text wow flipInX">
                        <h2>Заголовок</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita atque magni, sit sequi perspiciatis porro molestiae. Molestias distinctio id, nesciunt voluptatem vel praesentium nihil repellat velit eos voluptates impedit doloribus!</p>
                    </div>
                    <div class="header-gallery-item wow flipInX"><img src="/img/header-gallery-1.jpg" alt=""></div>
                    <div class="header-gallery-item wow flipInX"><img src="/img/header-gallery-2.jpg" alt=""></div>
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
                        <h2>Рядом с нами</h2>
                        <h3>Здесь есть все <span>и даже больше</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            lore magnam aliquam quaerat.</p>
                    </div>
                </div>
                <div class="beside-items">
                    <div class="beside-item beside-item-aqua wow bounceInUp">
                        <img src="img/aqua.jpg" alt="Аквапарк">
                        <div class="desc">
                            <b>Аквапарк</b>
                            <i>Большой и красивый акварк</i>
                        </div>
                        <span class="distance">80<span>км</span></span>
                    </div>
                    <div class="beside-item beside-item-bridge wow flip">
                        <img src="img/krum.jpg" alt="Аквапарк">
                        <span class="distance">80<span>км</span></span>
                        <div class="desc">
                            <b>Крым</b>
                            <i>Переправа в Крым </i>
                        </div>
                    </div>
                    <div class="beside-item beside-item-para wow bounceInUp">
                        <img src="img/paraplane.jpg" alt="Аквапарк">
                        <span class="distance">80<span>км</span></span>
                        <div class="desc">
                            <b>Парапланеризм</b>
                            <i> Парапланеристы со всей России</i>
                        </div>
                    </div>
                    <div class="beside-item beside-item-fish wow bounceInUp">
                        <img src="img/river.jpg" alt="Аквапарк">
                        <span class="distance">80<span>км</span></span>
                        <div class="desc">
                            <b>Рыбалка</b>
                            <i>Множество прудов и рек</i>
                        </div>
                    </div>
                    <div class="beside-item beside-item-wear wow bounceInUp">
                        <img src="img/field.jpg" alt="Аквапарк">
                        <div class="desc">
                            <b>Кавказские горы</b>
                            <i>Красота и воздух</i>
                        </div>
                        <span class="distance">80<span>км</span></span>
                    </div>
                    <div class="beside-item beside-item-volcan wow bounceInUp">
                        <img src="img/source.jpg" alt="Аквапарк">
                        <span class="distance">80<span>км</span></span>
                        <div class="desc">
                            <b>Грязевой лечебный вулкан «Тиздар»</b>
                        </div>
                    </div>
                    <div class="beside-item beside-item-text hidden-xs hidden-md hidden-sm">
                        <p>lorem</p>
                    </div>
                    <div class="beside-item beside-item-serf">
                        <img src="img/windsurfing.jpg" alt="Аквапарк">
                        <span class="distance">80<span>км</span></span>
                        <div class="desc">
                            <b>Аквапарк</b>
                            <i>Большой и красивый акварк</i>
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
                        <h2>В поселке</h2>
                        <h3>Здесь есть все <span>и даже больше</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlore
                            magnam aliquam quaerat.</p>
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
                                <span class="price">от 17 млн.руб</span>
                            </label>
                        </div>

                        <div class="houses_group houses_group-t2">
                            <input id="btn-type-2" type="radio" name="house-type" class="btn btn-type-2">
                            <label for="btn-type-2">
                                <span class="area">293 М<sup>2</sup></span>
                                <b>ТИП 2</b>
                                <span class="price">от 24 млн.руб</span>
                            </label>
                        </div>
                        <div class="houses_group houses_group-t3">
                            <input id="btn-type-3" type="radio" name="house-type" class="btn btn-type-3">
                            <label for="btn-type-3">
                                <span class="area">375 М<sup>2</sup></span>
                                <b>ТИП 3</b>
                                <span class="price">от 27 млн.руб</span>
                            </label>
                        </div>

                        <div class="houses_group houses_group-t4">
                            <input id="btn-type-4" type="radio" name="house-type" class="btn btn-type-4">
                            <label for="btn-type-4">
                                <span class="area">460 М<sup>2</sup></span>
                                <b>ТИП 4</b>
                                <span class="price">от 30 млн.руб</span>
                            </label>
                        </div>
                    </div>
                    <div class="hidden-xs hidden-sm hidden-md houses-about houses_about-1">
                        <div class="houses-about-desc clearfix">
                            <h2>Тип 1</h2>
                            <p>Инфраструктура поселка включает контрольно-пропускной пункт и гостевую парковку. В вечернее
                                и ночное время поселок освещается уличными фонарями.</p>
                        </div>
                        <div class="houses-about-details">
                            <img src="/img/houses-about-details.jpg" alt="">
                            <table>
                                <tr>
                                    <td>Площадь:</td>
                                    <td>фактическая - 194 м2,по нормам БТИ - 137 м2</td>
                                </tr>
                                <tr>
                                    <td>Этажность :</td>
                                    <td>2 этажа</td>
                                </tr>
                                <tr>
                                    <td>Площадь прилегающего участка :</td>
                                    <td>от 12 до 14 соток</td>
                                </tr>
                                <tr>
                                    <td>Гараж :</td>
                                    <td>открытая конструкция на 1 машиноместо</td>
                                </tr>
                                <tr>
                                    <td>Количество жилых комнат :</td>
                                    <td>свободная планировка</td>
                                </tr>
                                <tr>
                                    <td>Санузлы :</td>
                                    <td>2</td>
                                </tr>
                            </table>
                            <div class="btn_group btn_group--left">
                                <button class="btn btn_gray">Подробнее о технология</button>
                                <button class="btn btn_red" data-toggle="modal" data-target="#myModal">Хочу здесь жить!</button>
                            </div>
                        </div>
                        <div class="houses-about-gallery">
                            <div class="houses-about-gallery-item">
                                <img src="/img/houses-about-gallery-1.png" alt="">
                            </div>
                            <div class="houses-about-gallery-item">
                                <img src="/img/houses-about-gallery-2.png" alt="">
                            </div>
                            <div class="houses-about-gallery-item houses-about-gallery-item--floor">
                                <img src="/img/houses-about-gallery-3.png" alt="">
                                <b>2 этаж</b>
                            </div>
                            <div class="houses-about-gallery-item houses-about-gallery-item--floor">
                                <img src="/img/houses-about-gallery-4.png" alt="">
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
        <div class="frame">
            <iframe src="img/map.jpg"></iframe>
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>

        <div class="plan_number">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- <iframe class="hidden-xs hidden-sm hidden-md" src="img/map.jpg"></iframe> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="plan-detail">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="plan-detail-text">
                            <p>Поселок представляет собой комплексную застройку на земельных участках от 11 соток, сервисных
                                служб, набережной и закрытого обустроенного пляжа.</p>
                            <p>«Солнечный Берег» обеспечен газом, водой, теплом, электричеством, - все коммуникации сетевые,
                                спроектированы с запасом мощностей, трубопроводы и кабели проведены подземным способом.</p>
                            <p>Дороги поселка вымощены плиткой.</p>
                            <p>Инфраструктура поселка включает контрольно-пропускной пункт и гостевую парковку. В вечернее и
                                ночное время поселок освещается уличными фонарями. В поселке высажены деревья и кустарники,
                                в пешеходной зоне разбиты клумбы, цветники и газоны. Сделан удобный подход к собственному
                                обустроенному пляжу. Рядом находятся магазин товаров повседневного спроса, ресторан, детские
                                и спортивные площадки, школа.</p>
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
                            <img src="/img/plan-1.jpg" alt="Изображение дома">
                            <img src="/img/plan-2.jpg" alt="Изображение дома">
                            <img src="/img/plan-3.jpg" alt="Изображение дома">
                            <img src="/img/plan-4.jpg" alt="Изображение дома">
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
                        <h3>Благоустроенная территория</h3>
                        <ul class="left">
                            <li>Все улицы вымощены брусчаткой</li>
                            <li>По&nbsp;бокам деревья</li>
                            <li>Протяженная набережная</li>
                            <li>Детская площадка</li>
                            <li>Спортивная площадка</li>
                        </ul>
                        <ul class="right">
                            <li>Теннисный корт</li>
                            <li>Камеры видеонаблюдения</li>
                            <li>На&nbsp;территории отсутствуют линии электропередач</li>
                        </ul>
                    </div>
                    <div class="swiper-container village-swiper hidden-lg">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/img/slider-first-1.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/slider-first-2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/slider-first-3.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/slider-first-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div class="swiper-container village-swiper hidden-xs hidden-sm hidden-md">
                        <div class="swiper-container gallery-top gallery-top-v">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-1.jpg)"></div>
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-2.jpg)"></div>
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-3.jpg)"></div>
                            </div>

                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs gallery-thumbs-v">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-1.jpg)"></div>
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-2.jpg)"></div>
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-3.jpg)"></div>
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
                            <div class="swiper-slide">
                                <img src="/img/slider-first-1.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/slider-first-2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/slider-first-3.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/slider-first-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div class="swiper-container  hidden-xs hidden-sm hidden-md">
                        <div class="swiper-container gallery-top gallery-top-i">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-1.jpg)"></div>
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-2.jpg)"></div>
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-3.jpg)"></div>
                            </div>

                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs gallery-thumbs-i">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-1.jpg)"></div>
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-2.jpg)"></div>
                                <div class="swiper-slide" style="background-image:url(/img/slider-first-3.jpg)"></div>
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
                <p>Обсутроенный спуск,пригодный для спуска гидроциклов, лодок и тп.</p>
            </div>
            <div class="accomplishment-item accomplishment-item-hospitel">
                <div class="title clearfix">
                    <span class="name">Больница</span>
                    <span class="distance">20 км</span>
                </div>
                <p>Обсутроенный спуск,пригодный для спуска гидроциклов, лодок и тп.</p>
            </div>
            <div class="accomplishment-item accomplishment-item-baby clearfix">
                <p>Обсутроенный спуск,пригодный для спуска гидроциклов, лодок и тп.</p>
                <div class="title clearfix">
                    <span class="name">Детский сад</span>
                    <span class="distance">600 м</span>
                </div>
            </div>
            <div class="accomplishment-item accomplishment-item-wear">
                <p>Обсутроенный спуск,пригодный для спуска гидроциклов, лодок и тп.</p>
                <div class="title clearfix">
                    <span class="name">Море</span>
                    <span class="distance">100 м</span>
                </div>
            </div>
            <div class="accomplishment-item-float">
                <ul>
                    <li>Рестораны, кафе</li>
                    <li>Живописные сады с фруктами</li>
                    <li>Рынок местных фермеров</li>
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
                <a href="">+7 (222) 33-44-44</a>
                <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
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
                Инфраструктура поселка включает контрольно-пропускной пункт и гостевую парковку. В вечернее и ночное время поселок освещается уличными фонарями.
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