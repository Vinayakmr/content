<?php

namespace backend\models;

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
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['title', 'description','created'], 'string'],
            [['approve','uid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'approve' => 'Approve',
            'uid' => 'UserID',
            'created'=>'Created At',
        ];
    }

//    public function getUserName() {
//        return $this->hasOne(User::className(), ['id' => 'uid']);
//    }
    public static function getUserName($id) {
        $model = User::find()->where(["id" => $id])->one();
        if (!empty($model)) {
            return $model->username;
        }
        return null;
    }

}
