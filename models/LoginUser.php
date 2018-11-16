<?php

namespace app\models;

use Yii;
use yii\base\Model;

class LoginUser extends Model
{
    public $username;
    public $password;
    public $selector=0;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password','selector'], 'required'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

	
    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        
	}
	
    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        
    }
}
