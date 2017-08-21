<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Admin;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','admin'],
                'rules' => [
                    [
                        'actions' => ['logout','admin'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            // 'verbs' => [
                // 'class' => VerbFilter::className(),
                // 'actions' => [
                    // 'logout' => ['post'],
                // ],
            // ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Admin();

        $model->plan_img = Json::decode($model->plan_img);
        $model->village_slider = Json::decode($model->village_slider);
        $model->interioirs_slider = Json::decode($model->interioirs_slider);

        return $this->render('index', [
            'model' => $model,
        ]);

    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionAdmin()
    {
        $model = new Admin();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('admin', [
            'model' => $model,
        ]);
    }

    public function actionMail($name, $phone, $to = 'basyan@yandex.ru')
    {
        $subject = 'Тема письма';
        $mess = "Фио: $name \r\n Тел: $phone";
        Yii::$app->mailer->compose()
            ->setTo($to)
            ->setFrom([$to => $name])
            ->setSubject($subject)
            ->setTextBody($mess)
            ->send();

    }
    public function actionUpload()
    {

        error_reporting(E_ALL | E_STRICT);
        $upload_handler = new \app\models\UploadHandler();
    }
}
