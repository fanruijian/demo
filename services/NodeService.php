<?php
namespace app\services;

use app\utils\Functions as F;
use app\models\Node;

class NodeService extends BaseService {

    public function kkk(){
        $node = Node::find()->asArray()->all();  
        var_dump($node);
        exit();
    }
}//end
