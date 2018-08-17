<?php

namespace frontend\models;

use Yii;
use backend\models\User;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $approve
 */
class Content extends \yii\db\ActiveRecord {

    public $upload;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'description'], 'required'],
            [['title', 'description'], 'string'],
            [['approve', 'uid'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['image'], 'string', 'max' => 500],
            [['upload'], 'image', 'extensions' => ['png', 'jpeg', 'jpg', 'gif']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'approve' => 'Approve',
            'uid' => 'UserID',
        ];
    }

    public static function getUserName($id) {
        $model = User::find()->where(["id" => $id])->one();
        if (!empty($model)) {
            return $model->username;
        }
        return null;
    }

}
