<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<style type="text/css">
</style>
<form class="form-horizontal">
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">name</label>
    <div class="col-sm-10">
       <input type="text" class="form-control" id="firstname" 
          placeholder="请输入名字">
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">link</label>
    <div class="col-sm-10">
       <input type="text" class="form-control" id="firstname" 
          placeholder="请输入名字">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">选择列表</label>
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