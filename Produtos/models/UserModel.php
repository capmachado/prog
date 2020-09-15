<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 */
class UserModel extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
	public static function findIdentity($id){
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
		return $user =self::findOne($id);
		
/* 		if ($user)
		{
				return new static($user);
		}
		return null;
 */		
	}

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
/*         foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
         }
*/
        return null;
    }
	
	    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return null;
		//$this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return null;
		//$this->authKey === $authKey;
    }


	public static function findByUsername($username){
		return self::findOne(['username'=>$username]);
	}
	
	public function validatePassword($password){
		return $this->password === $password;
	}
	
}

