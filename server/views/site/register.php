<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 27.07.2016
 * Time: 10:01
 */

/* @var $model app\models\RegisterForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h2>Register</h2>

<div class="site-register col-md-4">
    <? $form = ActiveForm::begin()?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'cpassword')->passwordInput() ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
            </div>
        </div>
    <? ActiveForm::end()?>
</div>
