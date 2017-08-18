<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\widgets\upload\UploadOne;
$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12">

            <?php $form = ActiveForm::begin(); ?>


                <?= $form->field($model, 'title') ?>
                <?= $form->field($model, 'description') ?>
                <?= $form->field($model, 'keywords') ?>
            <hr>
                <?= $form->field($model, 'header_title') ?>
                <?= $form->field($model, 'header_desc') ?>

            <?= UploadOne::widget([
                'form' => $form,
                'model' => $model,
                'attribute' => 'beside_item_aqua',
                'tagClass' => 'btn btn-default fileinput-button btn-rounded',
                'label' => '<span class="icon-cloud-upload"></span> '.Yii::t('app', 'Загрузить'),
            ]);?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
