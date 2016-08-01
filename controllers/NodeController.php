<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\services\NodeService;

class NodeController extends BaseController
{

    public function actionList(){
        $nodeService = new NodeService();
        $nodeService -> kkk();
        // var_dump($this->service);
        // exit();
        // $this->service->kkk();
    }

    public function actionAdd(){
        // $nodeService = new NodeService();
        // $nodeService->add();
        return $this->render('add');
    }

    public function actionEdit(){
        return $this->render();
    }

}
