<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;

use app\utils\Functions as F;

class AuthController extends BaseController
{
    public $service = null;
    public $brandShow = false;

    // public function beforeAction($action) {
    // }   

    public function init() {
        parent::init();
        $controller = $this->id;
        $service = ucfirst($this->id).'Service';  
        $names = explode('-', $service);
        $names = array_map('ucfirst', $names);
        $service = implode($names);
        if (file_exists('../services/'.$service.'.php')) {
            $service = 'app\services\\'.$service;
            $this->service = new $service();
            $this->service->init();
        }
    }
}// end of auth controller
