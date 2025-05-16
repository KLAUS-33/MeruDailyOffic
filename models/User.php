<?php

namespace Attachee\Session\models;

use sigawa\mvccore\UserModel;

class User extends UserModel
{

   public int $id = 0;
    public string $fname = '';
    public string $lname = '';
    public ?string $email = '';
    public string $password = '';
    public string $phone = '';
    public ?int $role_id = null;
    public ?int $status = 0;
    public ?int $online_status = 0;
    public string $created_at = '';
    public string $updated_at = '';
    public string $password_created_at = '';
    public string $last_auth_at = '';
    public ?string $session_token = '';

    public static function tableName(): string
    {
        return 'users';
    }
    public function attributes(): array
    {
        return [
            'fname',
            'lname',
            'email',
            'password',
            'phone',
            'role_id',
            'status',
            'online_status',
            'created_at',
            'updated_at',
            'password_created_at',
            'last_auth_at'
        ];
    }
    public function getPermissions(): array
    {
        return [];
    }

    public function rules()
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'phonenumber' => [self::RULE_REQUIRED],
            'role_id' => [self::RULE_REQUIRED,self::RULE_DIGIT],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8],[self::RULE_UPPERCASE],[self::RULE_LOWERCASE],[self::RULE_SPECIAL_CHAR],[self::RULE_DIGIT]],
        ];
    }
  
       public function getDisplayName(): string
    {
        return $this->fname . " ". $this->lname;
    }
   }

