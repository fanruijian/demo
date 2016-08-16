<?php
namespace app\services;

use app\utils\Functions as F;
use app\models\Node;
use app\utils\PHPTree;

class NodeService extends BaseService {
    
    public $nodeMap = [
        'id'    =>  'id',
        'name'  =>  'title',
        'level' =>  'level',
        'parent_id'   =>  'pid'
    ];

    public function getAllNode(){
        $node = Node::find()->asArray()->all();
        $list = $this->fieldsMap($this->nodeMap,$node);
        $r = PHPTree::makeTree($list);
        echo json_encode($r);
        exit();

        return $list;
    }

    public function saveNewNode(){
    	$data = $this->I();
    	if(!isset($data['pid'])) $data['pid'] = 0;
    	$save = $this->save('Node',$data);

    }

}//end
