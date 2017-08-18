<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\widgets\upload\UploadOne;
use app\widgets\upload\UploadAll;

$this->title = 'Солнечный берег';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <div class="row">
        <div class="col-lg-12">

            <?php $form = ActiveForm::begin(); ?>


            <h2>SEO</h2>
            <?= $form->field($model, 'title') ?>
            <?= $form->field($model, 'description') ?>
            <?= $form->field($model, 'keywords') ?>
            <hr>
            <h2>Шапка</h2>
            <?= $form->field($model, 'header_title') ?>
            <?= $form->field($model, 'header_desc') ?>

            <hr>
            <h2>Вот те картинки</h2>
            <div class="row">
                <div class="col-md-2">
                    <?= UploadOne::widget([
                        'form' => $form,
                        'model' => $model,
                        'attribute' => 'beside_item_aqua_img',
                        'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                        'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                    ]); ?>
                    <?= $form->field($model, 'beside_item_aqua_title') ?>
                    <?= $form->field($model, 'beside_item_aqua_desc') ?>
                    <?= $form->field($model, 'beside_item_aqua_km') ?>
                </div>
                <div class="col-md-2">
                    <?= UploadOne::widget([
                        'form' => $form,
                        'model' => $model,
                        'attribute' => 'beside_item_bridge_img',
                        'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                        'label' => '<span class="icon-cloud-upload"></span> ' . Yii::t('app', 'Загрузить'),
                    ]); ?>
                    <?= $form->field($model, 'beside_item_bridge_title') ?>
                    <?= $form->field($model, 'beside_item_bridge_desc') ?>
                    <?= $form->field($model, 'beside_item_bridge_km') ?>
                </div>
            </div>

            <hr>
            <h2>Слайдер</h2>


            <?= UploadAll::widget([
                'form' => $form,
                'model' => $model,
                'attribute' => 'village_slider',
                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                'label' => '<span class="icon-cloud-upload"></span> '.Yii::t('app', 'Загрузить'),
            ]);?>

            <div class="form-group">
                <?= Html::submitButton('Сохраниеть', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
