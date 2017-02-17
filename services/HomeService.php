<?php
namespace app\services;

use app\utils\Functions as F;

class HomeService extends BaseService {

    public function getUsers(){
        return "user";
    }

    public function saveUser(){
        $post = $this->I();
        $this->save('User',$post);
    }

}//end
