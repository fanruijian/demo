<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<div class="login-form">
  <form action="index.php" method="post">
    <div class="form-group">
      <div class="input-group input-group-lg col-sm-8">
        <span class="input-group-addon" id="username-addon"> 
          <span class="glyphicon glyphicon-user"></span>
        </span>
       <input type="text" class="form-control" placeholder="请输入邮箱名" name="user_email" aria-describedby="useremail-addon" id="user_email">
      </div>
      <div class="help-block text-error" id="user-name-err"></div>
    </div>
    <div class="form-group">
      <div class="input-group input-group-lg col-sm-8">
        <span class="input-group-addon" id="username-addon"> 
          <span class="glyphicon glyphicon-lock"></span>
        </span>
        <input type="password" class="form-control" placeholder="请输入密码" name="user_pwd" aria-describedby="username-addon" id="user_pwd">
      </div>
      <div class="help-block text-error" id="user-pwd-err"></div>
    </div>
    <div class="form-group">
      <div class=" col-sm-4">
        <button class="btn btn-primary" type="submit" title="登陆">
          登陆
        </button>
      </div>
    </div>
  </form>
</div>
