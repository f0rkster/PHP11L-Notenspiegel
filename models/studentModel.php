<?php

namespace dwp\core;

class studentModel extends \dwp\core\Model
{
    const TABLENAME = '`student`';
    protected $schema = [
        'id'                    =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false],
        'createdAt'             =>  ['type' =>  \dwp\core\Model::TYPE_DATE,     'null'  =>  false],
        'updatedAt'             =>  ['type' =>  \dwp\core\Model::TYPE_DATE,     'null'  =>  true],
        'email'                 =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  false],
        'firstname'             =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  false],
        'lastname'              =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  false],
        'secondname'            =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true],
        'gender'                =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  false],
        'street'                =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true],
        'streetNumber'          =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true],
        'city'                  =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true],
        'zipCode'               =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true],
        'phone'                 =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true],
        'matriculationNumber'   =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  false]
    ];
}