<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<style type="text/css">
</style>
<form class="form-horizontal" method="post" action="<?php echo Url::to(['node/new-node-handle']);?>">
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">名称:</label>
    <div class="col-sm-10">
       <input type="text" name="name" class="form-control" id="firstname" 
          placeholder="请输入名字">
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">地址:</label>
    <div class="col-sm-10">
       <input type="text" name="title" class="form-control" id="firstname" 
          placeholder="请输入地址">
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">级别:</label>
    <div class="col-sm-10">
       <input type="text" name="level" class="form-control" id="firstname" 
          placeholder="请输入级别">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">选择列表:</label>
    <div class="col-sm-3">
      <select class="form-control">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">提交</button>
    </div>
  </div>
</form>