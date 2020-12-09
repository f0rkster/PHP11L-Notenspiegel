<?php
namespace dwp\controller;


class errorController extends \dwp\core\Controller
{
    public function actionError($errMsg = 'Unknown Error 404')
    {
        $this->setParam('errMsg', $errMsg);
    }
}