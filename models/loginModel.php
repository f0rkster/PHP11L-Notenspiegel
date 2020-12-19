<?php

namespace dwp\core;

class loginModel extends \dwp\core\Model
{
    const TABLENAME = '`login`';
    protected $schema = [
        'id'                    =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false],
        'createdAt'             =>  ['type' =>  \dwp\core\Model::TYPE_DATE,     'null'  =>  false],
        'updatedAt'             =>  ['type' =>  \dwp\core\Model::TYPE_DATE,     'null'  =>  true],
        'validated'             =>  ['type' =>  \dwp\core\Model::TYPE_BOOL,     'null'  =>  false],
        'enabled'               =>  ['type' =>  \dwp\core\Model::TYPE_BOOL,     'null'  =>  false],
        'username'              =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true],
        'lastActive'            =>  ['type' =>  \dwp\core\Model::TYPE_TIMESTAMP,'null'  =>  true],
        'lastLogin'             =>  ['type' =>  \dwp\core\Model::TYPE_TIMESTAMP,'null'  =>  true],
        'failedLoginCount'      =>  ['type' =>  \dwp\core\Model::TYPE_TINYINT,  'null'  =>  false],
        'passwordHash'          =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  false],
        'passwordResetHash'     =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true],
        'passwordResetCreatedAt'=>  ['type' =>  \dwp\core\Model::TYPE_TIMESTAMP,'null'  =>  true],
        'student'               =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false]
    ];
}