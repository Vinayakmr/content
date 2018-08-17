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
        margin-bottom: 150px;
        font-size: 16px;
    }
    .pheading{
        position: absolute;
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
    .login{
        float:right;
        margin-top: 120px;
        color:red;
        font-size: 30px;
    }

    .image{
        float:right;
        width:20%;
        margin-left: 5px;
        font-weight: bolder;
        text-align: center;
    }
    .text{
        width:80%;
        margin-right: 5px;
    }

</style>


<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="content">
    <?php $this->title = 'Content List'; ?>

    <!--$this->params['breadcrumbs'][] = $this->title;-->

    <div class='header'>Interesting Contents</div>


    <?php if (Yii::$app->session->hasFlash('login'))  ?>
    <div class="login"><?php echo Yii::$app->session->getFlash('login'); ?></div>
    <!--    <div class="login">hellloo</div>-->


    <div class="content-index">
        <div class="pheading"><?= Html::encode($this->title) ?></div>
        <?php //echo $this->render('_search', ['model' => $searchModel]);      ?>
        <div class="container bimg">
            <?=
            ListView::widget([
                'dataProvider' => $dataProvider,
                'viewParams' => ['testParam' => '1'],
                //            'itemView' => '_item',
                //        'options' =>['class'=> 'list-view well'],
                //            'itemOptions' => ['class' => 'well'],
                'layout' => "\n{pager}\n{items}",
                'itemView' => function($model, $key, $index, $widget) {
                    ?>
                    <p>
                    <div class="image"><img  src="<?php echo $model->image ?>" alt="NO IMAGE" width="200" height="200"></div>
                    <div class="tittle"><?php echo Html::encode($model->title) ?></div>
                    <div class="text"><i><?php echo $model->description ?></i></div>
                    </p>
                    <?php
                }
            ]);
            ?>
        </div>
    </div>
