<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    .header{
        position: absolute;
        top: 50px;
        left: 0;
        right: 0;
        border-style: solid;
        border-width: medium;
        border-color: #5BB0BF;
        background:url('../web/images/bp.jpg');
        font-size: 70px;
        text-align: center;
        padding:10px;
        color:gold;
    }
    .below{
        margin-top: 105px;
    }
    .cont{
        font-size: 24px;
        color:MediumSeaGreen;
    }
    form div.required label.control-label:after {
        content:" * ";
        color:red;
    }
</style>

<div class='header'>Interesting Contents</div>
<div class="below">
    <div class="site-login">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Please fill out the following fields to login:</p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
