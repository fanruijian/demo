<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property string $id
 * @property string $name
 * @property string $password
 * @property integer $status
 * @property integer $creator
 * @property string $last_update
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'password'], 'required'],
            [['status', 'creator'], 'integer'],
            [['last_update'], 'safe'],
            [['name'], 'string', 'max' => 64],
            [['password'], 'string', 'max' => 50],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'password' => 'Password',
            'status' => 'Status',
            'creator' => 'Creator',
            'last_update' => 'Last Update',
        ];
    }
}
