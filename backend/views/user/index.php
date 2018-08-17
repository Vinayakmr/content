<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

Yii::$app->setHomeUrl('?r=content/content-list');
$this->title = 'Users';
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

</style>

<div class='header'>Interesting Contents</div>
<div class="below">
    
    <div class="user-index">

        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
//            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn',
                    'contentOptions' => ['style' => 'width:100px; white-space: normal;'],
                ],
//            'id',
                'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
                'email:email',
                //'status',
                'created_at:date',
                'updated_at:date',
//            'role',
                ['attribute' => 'role',
                    'label' => 'Role',
                    'contentOptions' => ['style' => 'width:150px; white-space: normal;'],
                    'filter' => [1 => 'Administrator', 0 => 'User'],
                    'value' => function ($data) {
                        if ($data->role == '20') {
                            return 'Administrator';
                        } else {
                            return 'User';
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
