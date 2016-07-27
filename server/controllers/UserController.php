<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 27.07.2016
 * Time: 9:35
 */

namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
}