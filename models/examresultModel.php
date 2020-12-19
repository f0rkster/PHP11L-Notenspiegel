<?php

namespace dwp\core;

class examresultModel extends \dwp\core\Model
{
    const TABLENAME = '`examresult`';
    protected $schema = [
        'id'            =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false],
        'createdAt'     =>  ['type' =>  \dwp\core\Model::TYPE_DATE,     'null'  =>  false],
        'updatedAt'     =>  ['type' =>  \dwp\core\Model::TYPE_DATE,     'null'  =>  true],
        'result'        =>  ['type' =>  \dwp\core\Model::TYPE_DECIMAL,  'null'  =>  false],
        'percentage'    =>  ['type' =>  \dwp\core\Model::TYPE_DECIMAL,  'null'  =>  true],
        'exam'          =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false],
        'createdBy'     =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false],
        'student'       =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false]
    ];
}