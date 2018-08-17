<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Content */
/* @var $form yii\widgets\ActiveForm */

$baseUrl = Yii::$app->request->getBaseUrl(true);
$this->title = 'Create Contents';
//$this->params['breadcrumbs'][] = $this->title;
?>

<!--<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>-->

<style>
    body{
        /*        background:url('../web/images/gb.jpeg');*/
        background-color: #B7F2A0;
    }    
    .header{
        position: absolute;
        top: 50px;
        left: 0;
        right: 0;
        margin-bottom: 5px;
        border-style: solid;
        border-width: medium;
        border-color: #5BB0BF;
        background:url('../web/images/bp.jpg');
        font-size: 70px;
        text-align: center;
        padding:10px;
        color:gold;
    }
    .pheading{
        margin-top: 105px;
        font-size: 50px;
        font-weight: bold;
        font-family: "Times New Roman";
    }
    form div.required label.control-label:after {
        content:" * ";
        color:red;
    }

    .beauty{
        margin-top:200px;
        font-size: 40px;
        color:DodgerBlue;
        float: right;
        margin-left: 10px;
        width:300px;

    }
</style>
<script src="<?= $baseUrl ?>/js/jquery-3.3.1.min.js"></script>

<div class='header'>Interesting Contents</div>

<?php if (Yii::$app->session->hasFlash('success'))  ?>
<div class="beauty"><?php echo Yii::$app->session->getFlash('success'); ?></div>

<div class="pheading"><?= Html::encode($this->title) ?></div>

<?php $form = ActiveForm::begin(['method' => 'post']); ?>

<?=
        $form->field($model, 'title')->textInput(['style' => 'width:600px;'])
        ->label('Content Title:')
        ->hint('Please enter the content title.');
?>
<?=
        $form->field($model, 'description')->textarea(['id' => 'myTextArea3', 'style' => 'width:600px;height:400px;'])
        ->label('Content Description:')
        ->hint('Please provide a content in less than 10,000 chartecters.');
?>
<div  id="res" ></div><br/><br/>

<?= $form->field($model, 'upload')->fileInput()
         ->label('Upload Image(Optional)')   
?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['style' => 'width:100px;height:30px;background-color:#0D9EF9;', 'class' => 'btn btn-success']) ?>
    <?= Html::a('Back', ['content-list'], ['style' => 'width:100px;height:30px;padding:5px;margin-left:400px;background-color:#0D9EF9;', 'class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

<script>     
    var $ = jQuery.noConflict();
    $('#myTextArea3').keyup(function () {
        var count = this.value.length;
        console.log(count);
        $('div#res').text(count);
        $("div#res").append(" Charecters.");

    });
</script>