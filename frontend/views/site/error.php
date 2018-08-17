<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'Invalid URL';
?>


<style>
    body{
        background:url('../web/images/gb.jpeg');
    }

    .bimg{
        position: absolute;
        top:250px;
        left: 0;
        right: 0;
        width:90%;
        background:url('../web/images/gob.jpg');
    }
    .tittle{
        font-family:"verdana";
        font-size: 20px;
        font-stretch: expanded;
        font-weight: bold;
    }
    p{
        font-family: "courier";
        font-stretch: expanded;
        font-weight: bolder;
        font-size: 16px;

    }
    .pheading{
        margin-top: 105px;
        font-size: 50px;
        font-weight: bold;
        font-family: "Times New Roman";
    }
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

</style>
<div class="content">
    <?php $this->title = 'Page does\'t exist'; ?>

    <!--$this->params['breadcrumbs'][] = $this->title;-->

    <div class='header'>Interesting Contents</div>
    <div class="content-index">
        <div class="pheading"><?= Html::encode($this->title) ?></div>

        <p>
            <?= Html::img('@web/images/Question.jpg', ['alt' => 'question?', 'class' => 'thing', 'height' => 350, 'width' => 400, 'style' => 'float:right']); ?>
            <b><div style="margin-top: 50px;font-stretch:extra-expanded; font-size: 30px;">
                This page does not exist,
                Please check the url,
                Else click the button below to go back to home page.
                </div><b>
                </br>
                <?= Html::a('Back to homepage', ['/content/content-list'], ['style' => 'font-size:30px; width:300px;height:50px;padding:5px;background-color:#0D9EF9;', 'class' => 'btn btn-success']) ?><b>
        </p>                
    </div>        
</div>



