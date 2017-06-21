<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property integer $Id
 * @property string $type
 * @property string $describe
 */
class Type extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'type';
    }

    public function rules()
    {
        return [
            [['type'], 'string', 'max' => 64],
            [['describe'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'type' => '类型',
            'describe' => '描述',
        ];
    }
}
