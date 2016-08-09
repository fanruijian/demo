<?php
namespace app\services;

use app\traits\RequestTrait;
use app\traits\DataTrait;
use app\traits\ModelTrait;
use app\traits\HierarchyTrait;

class BaseService
{
    use RequestTrait, ModelTrait, DataTrait, HierarchyTrait;
	public function __construct(){
	}

}//end
