<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Content;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contents';
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

</style>

<div class='header'>Interesting Contents</div>
<div class="below">

    <div class="content-index">

        <?php if (Yii::$app->session->hasFlash('success'))  ?>
        <div class="cont"><?php echo Yii::$app->session->getFlash('success'); ?></div>
        <!--        <div class="cont">Hi</div>-->

        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn',
                    'contentOptions' => ['style' => 'width:5px;'],
                ],
//            'id',
//            'approve',
//            'title:ntext',
//            'image',
//            'description:ntext',
                ['attribute' => 'title',
                    'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
                ],
//                ['attribute' => 'description',
//                    'contentOptions' => ['style' => 'width:1000px; white-space: normal;'],
//                ],
                [
                    'header' => 'Content Creater',
                    'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
                    'value' => function($data) {
                        return Content::getUserName($data->uid);
                    },
                ],
                ['attribute' => 'created',
                    'format' => 'date',
                    'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
                ],
                ['attribute' => 'approve',
                    'label' => 'Approval',
                    'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
                    'filter' => [1 => 'Approved', 0 => 'Not approved'],
                    'value' => function ($data) {
                        if ($data->approve == '1') {
                            return 'Approved';
                        } else {
                            return 'Not approved';
                        }
                    },
                ],
//            ['class' => 'yii\grid\ActionColumn'],
//                   [
//            'attribute' => 'status',
//            'label' => 'Status',
//          'contentOptions'=>['style'=>'background-color:yellow; visibility:visible;'],
//            'class' => app\grid\StatusDataColumn::className(),
//            'value' => ['app\models\RecordUtil', 'getStatusValue'],
//            'value'=>function ($data){
//                    if($data->status=='active'){
//                        return 'Active';
//                    }
//                    else{
//                        return 'Inactive';
//                    }
//            },
//            'visible'=>false,
//              'header'=>'My Status',
//              'footer'=>'Testing status'
//        ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Action',
                    'headerOptions' => ['width' => '80'],
                    'template' => '{view}{update}',
                ],
            //    'layout'=>"\n{pager}\n{items}\n{summary}",
//    ],
//    'layout'=>"\n{pager}\n{items}\n{summary}",
//      'rowOptions'=>function($model,$key,$index,$grid){
//            $class=$index%2?'odd':'even';
//            return array('key'=>$key,'index'=>$index,'class'=>$class);   
//      },
//        'showOnEmpty'=>false,
//            'emptyCell'=>'-',
            ],
        ]);
        ?>
    </div>
</div>