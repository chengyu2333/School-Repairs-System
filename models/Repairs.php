<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "repairs".
 *
 * @property integer $Id
 * @property integer $type
 * @property string $title
 * @property string $describe
 * @property string $place
 * @property string $photo
 * @property string $name
 * @property string $email
 * @property string $time
 * @property integer $status
 * @property string $engineer
 * @property string $comment
 * @property integer $star
 */
class Repairs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $verifyCode;
    public static function tableName()
    {
        return 'repairs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'status', 'star'], 'integer'],
            [['describe'], 'required'],
            [['describe'], 'string'],
            [['title', 'place', 'photo', 'name', 'email', 'engineer', 'comment'], 'string', 'max' => 255],
            [['time'], 'string', 'max' => 64],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'type' => '类型',
            'title' => '标题',
            'describe' => '问题描述',
            'place' => '地点',
            'photo' => '报修照片',
            'name' => '报修人',
            'email' => '报修人邮箱',
            'time' => '报修时间',
            'status' => '状态',
            'engineer' => '维修人员',
            'comment' => '备注',
            'star' => '评分',
            'verifyCode' => '验证码'
        ];
    }

    /**
     * @inheritdoc
     * @return RepairsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RepairsQuery(get_called_class());
    }
}
