<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Content;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

//<style>
//</style>

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
            'style' => 'margin-left:990px;',
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title:ntext',
            'description:ntext',
//            'approve',
            [
                'attribute' => 'image',
                'value' => $model->image,
                'format' => ['image', ['width' => '100', 'height' => '100']],
            ],
            ['attribute' => 'image',
                'label' => 'Image path'
            ],
            'uid',
            [
                'label' => 'ContentCreater',
                'value' => function($data) {
                    return Content::getUserName($data->uid);
                },
            ],
            'created:date',
            ['attribute' => 'approve',
                'label' => 'Approval',
                'value' => function ($data) {
                    if ($data->approve == '1') {
                        return 'Approved';
                    } else {
                        return 'Not approved';
                    }
                },
            ],
        ],
    ])
    ?>

</div>
