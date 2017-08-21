<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\widgets\upload\UploadOne;
use app\widgets\upload\UploadAll;
use \marqu3s\summernote\Summernote;
$this->title = 'Солнечный берег';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <div class="row">
        <div class="col-lg-12">

            <?php $form = ActiveForm::begin(); ?>

            <div class="row">
                <div class="col-md-10">
                    <h2>SEO</h2>
                    <?= $form->field($model, 'title'); ?>
                    <?= $form->field($model, 'description'); ?>
                    <?= $form->field($model, 'keywords'); ?>

                    <hr>
                    <h2>Шапка</h2>
                    <?= $form->field($model, 'header_title'); ?>
                    <?= $form->field($model, 'header_desc')->textarea(); ?>
                    <?= UploadOne::widget([
                        'form' => $form,
                        'model' => $model,
                        'attribute' => 'header_img',
                        'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                        'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                    ]); ?>
                    <?= $form->field($model, 'header_slogan'); ?>
                    <?= $form->field($model, 'header_slogan_desc'); ?>

                    <hr>

                    <h2>Рядом с нами</h2>
                    <?= $form->field($model, 'beside_title'); ?>
                    <?= $form->field($model, 'beside_slogan'); ?>
                    <?= $form->field($model, 'beside_desc')->textarea(); ?>
                    <?= UploadOne::widget([
                        'form' => $form,
                        'model' => $model,
                        'attribute' => 'beside_img',
                        'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                        'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                    ]); ?>
                    <h4>Объекты</h4>
                    <div class="row">
                        <div class="col-md-2">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'beside_item_aqua_img',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                            <?= $form->field($model, 'beside_item_aqua_title'); ?>
                            <?= $form->field($model, 'beside_item_aqua_desc'); ?>
                            <?= $form->field($model, 'beside_item_aqua_km'); ?>
                        </div>
                        <div class="col-md-2">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'beside_item_bridge_img',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                            <?= $form->field($model, 'beside_item_bridge_title'); ?>
                            <?= $form->field($model, 'beside_item_bridge_desc'); ?>
                            <?= $form->field($model, 'beside_item_bridge_km'); ?>
                        </div>
                        <div class="col-md-2">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'beside_item_para_img',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                            <?= $form->field($model, 'beside_item_para_title'); ?>
                            <?= $form->field($model, 'beside_item_para_desc'); ?>
                            <?= $form->field($model, 'beside_item_para_km'); ?>
                        </div>
                        <div class="col-md-2">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'beside_item_fish_img',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                            <?= $form->field($model, 'beside_item_fish_title'); ?>
                            <?= $form->field($model, 'beside_item_fish_desc'); ?>
                            <?= $form->field($model, 'beside_item_fish_km'); ?>
                        </div>
                        <div class="col-md-2">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'beside_item_wear_img',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                            <?= $form->field($model, 'beside_item_wear_title'); ?>
                            <?= $form->field($model, 'beside_item_wear_desc'); ?>
                            <?= $form->field($model, 'beside_item_wear_km'); ?>
                        </div>
                    </div>


                    <hr>
                    <h2>Неподалеку</h2>
                    <?= $form->field($model, 'beside2_title'); ?>
                    <?= $form->field($model, 'beside2_desc'); ?>
                    <?= $form->field($model, 'beside2_text')->textarea(); ?>
                    <div class="row">
                        <div class="col-md-3">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'beside2_item_img',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>

                            <?= $form->field($model, 'beside2_item_title'); ?>
                            <?= $form->field($model, 'beside2_item_km'); ?>
                        </div>
                    </div>
                    <hr>
                    <h2>В посёлке</h2>
                    <?= $form->field($model, 'infrastructure_title'); ?>
                    <?= $form->field($model, 'infrastructure_slogan'); ?>
                    <?= $form->field($model, 'infrastructure_desc')->textarea(); ?>


                    <hr>
                    <h2>Типы домов</h2>


                    <h3>Тип 1</h3>
                    <?= $form->field($model, 'house_type_1_price'); ?>
                    <?= $form->field($model, 'house_type_1_desc')->textarea(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_1_img1',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-4">

                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_1_img2',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-4">

                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_1_img3',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                    </div>

                    <?= $form->field($model, 'house_type_1_area'); ?>
                    <?= $form->field($model, 'house_type_1_level'); ?>
                    <?= $form->field($model, 'house_type_1_area2'); ?>
                    <?= $form->field($model, 'house_type_1_garage'); ?>
                    <?= $form->field($model, 'house_type_1_room'); ?>
                    <?= $form->field($model, 'house_type_1_broom'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_1_plan1',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-6">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_1_plan2',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                    </div>


                    <h3>Тип 2</h3>
                    <?= $form->field($model, 'house_type_2_price'); ?>
                    <?= $form->field($model, 'house_type_2_desc')->textarea(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_2_img1',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-4">

                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_2_img2',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-4">

                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_2_img3',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                    </div>

                    <?= $form->field($model, 'house_type_2_area'); ?>
                    <?= $form->field($model, 'house_type_2_level'); ?>
                    <?= $form->field($model, 'house_type_2_area2'); ?>
                    <?= $form->field($model, 'house_type_2_garage'); ?>
                    <?= $form->field($model, 'house_type_2_room'); ?>
                    <?= $form->field($model, 'house_type_2_broom'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_2_plan1',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-6">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_2_plan2',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                    </div>


                    <h3>Тип 3</h3>
                    <?= $form->field($model, 'house_type_3_price'); ?>
                    <?= $form->field($model, 'house_type_3_desc')->textarea(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_3_img1',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-4">

                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_3_img2',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-4">

                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_3_img3',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                    </div>

                    <?= $form->field($model, 'house_type_3_area'); ?>
                    <?= $form->field($model, 'house_type_3_level'); ?>
                    <?= $form->field($model, 'house_type_3_area2'); ?>
                    <?= $form->field($model, 'house_type_3_garage'); ?>
                    <?= $form->field($model, 'house_type_3_room'); ?>
                    <?= $form->field($model, 'house_type_3_broom'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_3_plan1',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-6">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_3_plan2',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                    </div>


                    <h3>Тип 4</h3>
                    <?= $form->field($model, 'house_type_4_price'); ?>
                    <?= $form->field($model, 'house_type_4_desc')->textarea(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_4_img1',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-4">

                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_4_img2',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-4">

                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_4_img3',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                    </div>

                    <?= $form->field($model, 'house_type_4_area'); ?>
                    <?= $form->field($model, 'house_type_4_level'); ?>
                    <?= $form->field($model, 'house_type_4_area2'); ?>
                    <?= $form->field($model, 'house_type_4_garage'); ?>
                    <?= $form->field($model, 'house_type_4_room'); ?>
                    <?= $form->field($model, 'house_type_4_broom'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_4_plan1',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                        <div class="col-md-6">
                            <?= UploadOne::widget([
                                'form' => $form,
                                'model' => $model,
                                'attribute' => 'house_type_4_plan2',
                                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                                'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                            ]); ?>
                        </div>
                    </div>

                    <hr>
                    <h2>План поселка</h2>
                    <?= $form->field($model, 'plan_text1')->widget(Summernote::className()); ?>
                    <?= $form->field($model, 'plan_text2')->textarea(); ?>
                    <?= UploadAll::widget([
                        'form' => $form,
                        'model' => $model,
                        'attribute' => 'plan_img',
                        'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                        'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                    ]); ?>

                    <hr>
                    <h2>Посёлок</h2>
                    <?= $form->field($model, 'village_title'); ?>
                    <?= $form->field($model, 'village_desc')->widget(Summernote::className()); ?>
                    <?= $form->field($model, 'village_desc2')->widget(Summernote::className()); ?>
                    <?= UploadAll::widget([
                        'form' => $form,
                        'model' => $model,
                        'attribute' => 'village_slider',
                        'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                        'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                    ]); ?>

                    <hr>
                    <h2>Интерьеры домов</h2>
                    <?= UploadAll::widget([
                        'form' => $form,
                        'model' => $model,
                        'attribute' => 'interioirs_slider',
                        'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                        'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                    ]); ?>


                    <hr>
                    <h2>Инфраструктура</h2>
                    <?= $form->field($model, 'infrastructure_school'); ?>
                    <?= $form->field($model, 'infrastructure_hospital'); ?>
                    <?= $form->field($model, 'infrastructure_kindergarten'); ?>
                    <?= $form->field($model, 'infrastructure_sea'); ?>
                    <?= $form->field($model, 'infrastructure_center')->widget(Summernote::className()); ?>


                    <h2>Подвал</h2>
                    <?= $form->field($model, 'footer_text')->textarea(); ?>
                    <?= $form->field($model, 'footer_phone'); ?>


                    <hr>
                </div>
                <div class="col-md-2">
                    <div class="form-group" style="position: fixed;">
                        <?= Html::submitButton('Сохраниеть', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
