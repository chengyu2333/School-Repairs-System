<?php

namespace app\models;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
//    public $id;
//    public $username;
//    public $password;
//    public $authKey;
//    public $accessToken;


    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            [['power'], 'integer'],
            [['username', 'password', 'comment'], 'string', 'max' => 255],
            [['name', 'phone'], 'string', 'max' => 32],
            [['type'], 'string', 'max' => 11],
            [['authKey'], 'string', 'max' => 100],
            [['accessToken'], 'string', 'max' => 100],
        ];
    }
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'username' => '用户名',
            'password' => '密码',
            'name' => '姓名',
            'phone' => '手机',
            'type' => '负责类型',
            'power' => '权限',
            'comment' => '备注',
            'authKey' => 'AuthKey',
            'accessToken' => 'AccessToken',
        ];
    }
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public static function findByUsername($username)
    {
        $user = User::find()
            ->where(['username' => $username])
            ->asArray()
            ->one();

        if($user){
            return new static($user);
        }
        return null;
    }
    public function getId()
    {
        return $this->Id;
    }

    public function getPower()
    {
        return $this->power;
    }
    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
