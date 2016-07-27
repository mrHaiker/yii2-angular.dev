<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 27.07.2016
 * Time: 9:35
 */

namespace app\controllers;

use app\models\LoginForm;
use app\models\RegisterForm;
use Yii;
use yii\rest\Controller;
use yii\web\ServerErrorHttpException;

class UserController extends Controller
{
    public function actionIndex()
    {
        return 'test';
    }

    /**
     * @return array|string
     * @throws ServerErrorHttpException
     * @throws \yii\base\InvalidConfigException
     */
    public function actionRegister()
    {
        $model = new RegisterForm();
        

        if($model->load(\Yii::$app->request->getBodyParams(), '') && $model->validate()) {
            if($model->register()) {
                return 'User successfully registered';
            }
            else {
                throw new ServerErrorHttpException('Register failed for unknown reason.');
            }
        }
        else {
            return $model->getErrors();
        }
    }


    /**
     * @return LoginForm|array
     * @throws \yii\base\InvalidConfigException
     */
    public function actionLogin() {
        $model = new LoginForm();
        if ($model->load(Yii::$app->getRequest()->getBodyParams(), '') && $model->validate()) {
            if($model->login()) {
                return ['access_token' => Yii::$app->user->identity->getAuthKey()];
            }
        }
        return $model;
    }

    protected function verbs()
    {
        return [
            'register' => ['POST'],
            'login' => ['POST'],
        ];
    }
}