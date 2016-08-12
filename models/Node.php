<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%node}}".
 *
 * @property integer $id
 * @property integer $status
 * @property integer $sort
 * @property integer $pid
 * @property integer $level
 * @property string $name
 * @property string $title
 */
class Node extends ActiveRecord
{       
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ly_node';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','title','pid','level'], 'required'],
            [['sort','pid','level','status'], 'integer'],
            [['name','title'], 'string']
        ];
    }
    
}
