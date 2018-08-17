<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
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
    <div class="site-signup">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Please fill out the following fields to signup:</p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?=$form->field($model, 'password')->passwordInput()
                        ->hint('Please include a-z, A-Z, 0-9 and special charecters, minimum 8 charecters.');
                ?>

                <div class="form-group">
<?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

<?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>