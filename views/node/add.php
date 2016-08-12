<?php

/* @var $this yii\web\View */
use yii\web\View;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<style type="text/css">
</style>
<form class="form-horizontal" method="post" action="<?php echo Url::to(['node/new-node-handle']);?>">
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">名称:</label>
    <div class="col-sm-10">
       <input type="text" name="title" class="form-control" id="title" 
          placeholder="请输入名字">
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">地址:</label>
    <div class="col-sm-10">
       <input type="text" name="name" class="form-control" value="" id="firstname" 
          placeholder="请输入地址">
    </div>
  </div>
  <div class="form-group">
    <label for="level" class="col-sm-2 control-label">级别:</label>
    <div class="col-sm-10">
       <input type="text" name="level" class="form-control" value="" id="level" 
          placeholder="请输入级别">
    </div>
  </div>
  <div class="form-group">
    <label for="sort" class="col-sm-2 control-label">排序:</label>
    <div class="col-sm-10">
       <input type="text" name="sort" class="form-control" id="sort" 
          placeholder="请输入排序">
    </div>
  </div>
  <div class="form-group selectlist">
    <label for="name" class="col-sm-2 control-label">选择列表:</label>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">提交</button>
    </div>
  </div>
</form>
<?php
$nodeUrl = Url::to(['get-node']);
$this->registerJs("var nodeUrl='$nodeUrl';", View::POS_HEAD);
?>
<script type="text/javascript">
  $(function(){
    $("#level").bind("blur",function(){
      var levelVal = $(this).val();
      $(".selectlist > div").remove();
      for(var i=0;i<levelVal;i++){
        var opt = '<div class="col-sm-2"><select class="form-control"><option value="">请选择</option></div>';
        $(".selectlist").append(opt);    
      }

      $.ajax({ 
        url: nodeUrl,
        success: function(data){
          $.each(data,function(i,n){
            var levelId = n.level;
            if(levelId == 1){
              opts = '<option value="'+n.id+'">'+n.name+'</option>';
              $(".selectlist select").eq(levelId-1).append(opts);
            }
          })
        }
      });
      
      $("select").bind("change",function(){
        var pid = $(this).val();
        $.ajax({ 
          url: nodeUrl,
          dataType : "json",
          type : 'POST',
          data : {"pid":pid},
          success: function(data){
            $.each(data,function(i,n){
              var levelId = n.level;
              opts = '<option value="'+n.id+'">'+n.name+'</option>';
              $(".selectlist select").eq(levelId-1).append(opts);
            });
          }
        });
      })

      // alert($("select").length);
    });
    
  
  })
</script>
