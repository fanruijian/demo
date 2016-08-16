<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\services\NodeService;

class NodeController extends BaseController
{

    public function actionList(){
        echo date("Y-m-d", mktime(0, 0, 0, 12, 32, 2007));
        $nodeService = new NodeService();
        $this->node = $this->toJson($nodeService -> getAllNode());
        var_dump($this->toJson($nodeService -> getAllNode()));

        $this->aaa = "fdasf";
    }

    public function actionAdd(){
        $this->node = $this->toJson($this->service->getAllNode());
        $items = $this->service->getAllNode();
        var_dump($items);
        exit();
        $this->aaa = 'aaa';
        return $this->show();
    }

    public function actionEdit(){
        return $this->render();
    }

    public function actionNewNodeHandle(){
        $this->service->saveNewNode();
    }

    public function actionGetNode(){
        $nodes = $this->service->getNode();
        $this->jsonReturn($nodes);
    }
}
