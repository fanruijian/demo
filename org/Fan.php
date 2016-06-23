<?php
namespace app\org;
class Fan{
	private $name = 'xiaofan';
	private $age = '25';
	public function __construct(){
		echo 'fff';
		$this-say();
	}
	public function say(){
		echo 'my name is '.$this->name.' age is '.$this->age;
	}
}