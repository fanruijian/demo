<?php
namespace app\services;

use app\utils\Functions as F;
use app\models\Node;

class NodeService extends BaseService {
    
    public $nodeMap = [
        'id'    =>  'id',
        'name'  =>  'title',
        'level' =>  'level',
        'pid'   =>  'pid'
    ];

    public function getAllNode(){
        $node = Node::find()->asArray()->all();
        $list = $this->fieldsMap($this->nodeMap,$node);
        return $list;
    }

    public function saveNewNode(){
    	$data = $this->I();
    	if(!isset($data['pid'])) $data['pid'] = 0;
    	$save = $this->save('Node',$data);

    }

    public function getNode(){
    	$pid = $this->I('pid');
    	if(!isset($pid)){
    		$pid = 0;
    	}
    	$where = ['pid'=>$pid];
    	$list = $this->getAll('Node', $where);
    	$list = $this->fieldsMap($this->nodeMap,$list);
    	return $list;
    }
}//end
