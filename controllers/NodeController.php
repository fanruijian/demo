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
        $nodeService -> kkk();
    }

    public function actionAdd(){
        return $this->render('add');
    }

    public function actionEdit(){
        return $this->render();
    }

    public function actionNewNode(){
        echo 'aaa';
        $p = $this->I();
        var_dump($p);
    }

}
