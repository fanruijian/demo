<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\helpers\Url;

use app\traits\RequestTrait;
use app\traits\DataTrait;
use app\traits\ModelTrait;
use app\traits\HierarchyTrait;



class BaseController extends Controller
{
    use RequestTrait, ModelTrait, DataTrait, HierarchyTrait;
    public $service;
    // 防范攻击
    public $enableCsrfValidation = false;
    public function init(){
        $controller = $this->id;
        $servicePath = '../services/'.ucfirst($controller).'Service.php';
        if(file_exists($servicePath)){
            $service = ucfirst($this->id).'Service';
            $service = "app\services\\$service";
            $this->service = new $service();
        }
    }

    public function actionAdd(){
        $nodeService = new NodeService();
        $nodeService->add();
        return $this->render('add');
    }

    public function actionEdit(){
        return $this->render();
    }

}
