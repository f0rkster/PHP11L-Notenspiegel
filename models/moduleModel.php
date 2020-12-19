<?php

namespace dwp\core;

class moduleModel extends \dwp\core\Model
{
    const TABLENAME = '`module`';
    protected $schema = [
        'id'            =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false],
        'createdAt'     =>  ['type' =>  \dwp\core\Model::TYPE_DATE,     'null'  =>  false],
        'updatedAt'     =>  ['type' =>  \dwp\core\Model::TYPE_DATE,     'null'  =>  true],
        'number'        =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  false],
        'name'          =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  false],
        'active'        =>  ['type' =>  \dwp\core\Model::TYPE_BOOL,     'null'  =>  false],
        'createdBy'     =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false]
    ];
}
