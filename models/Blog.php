<?php

namespace Attachee\Session\models;

use sigawa\mvccore\db\DbModel;

class Blog extends DbModel
{
    public static function tableName(): string
    {
        return 'Blog';
    }
    public function attributes(): array
    {
        return [];
    }
    public function labels(): array
    {
        return [];
    }
    public function rules()
    {
        return [];
    }
    public function save()
    {
        return parent::save();
    }
}
