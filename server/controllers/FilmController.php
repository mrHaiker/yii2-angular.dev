<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 21.07.2016
 * Time: 23:18
 */

namespace app\controllers;


use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class FilmController extends ActiveController
{
    public $modelClass = 'app\models\Film';

    public function behaviors()
    {
        return
        ArrayHelper::merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => Cors::className(),
            ],
        ]);

    }
}