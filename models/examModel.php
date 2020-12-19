<?php

 namespace dwp\core;

 class examModel extends \dwp\core\Model
 {
     const TABLENAME = '`exam`';
     protected $schema = [
         'id'           =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false],
         'createdAt'    =>  ['type' =>  \dwp\core\Model::TYPE_DATE,     'null'  =>  false],
         'updatedAt'    =>  ['type' =>  \dwp\core\Model::TYPE_DATE,     'null'  =>  true],
         'examdate'     =>  ['type' =>  \dwp\core\Model::TYPE_DATE,     'null'  =>  false],
         'semester'     =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true],
         'module'       =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false],
         'room'         =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true],
         'building'     =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true],
         'createdBy'    =>  ['type' =>  \dwp\core\Model::TYPE_INTEGER,  'null'  =>  false],
         'type'         =>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  false],
         'typeOtherName'=>  ['type' =>  \dwp\core\Model::TYPE_STRING,   'null'  =>  true]
     ];

 }