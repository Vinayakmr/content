<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = 'Create Content';
$this->params['breadcrumbs'][] = ['label' => 'Contents', 'url' => ['index']];
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

    <div class="content-create">

        <h1><?= Html::encode($this->title) ?></h1>

        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>

    </div>
</div>    
