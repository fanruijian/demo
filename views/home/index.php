<form action="" method="post" name="form1" id="form1">
  
  <table border="0px" style="font-size:12px" width="630px">
    <tr> 
      <td align="right">用户名:</td>
      <td><input type="text" id="us" name="us" style="width:120px" value="maodong" /></td>
      <td><div id="usTip" style="width:250px"></div></td>
    </tr>
    <tr> 
      <td align="right">密码:</td>
      <td><input type="password" id="password1" name="password1" style="width:120px" /></td>
      <td><div id="password1Tip" style="width:250px"></div></td>
    </tr>
    <input type="submit" name="button" id="button" value="提交" />
    <br />
  </table>
</form>
<script type="text/javascript">
  $(document).ready(function(){
  $.formValidator.initConfig({formID:"form1",debug:false,submitOnce:true
  });
  $("#us").formValidator({
       onShow:"input username",
       onFocus:"last 5",
       onCorrect:"is use",
        onEmpty:"not empty"
  }).inputValidator({
       min:5,
       max:10,
       // empty:{leftEmpty:false,rightEmpty:false,emptyError:"密码两边不能有空符号"},
       onError:"not empty"
  });
  // $("#us").formValidator({onShow:"请输入用户名,只有输入\"maodong\"才是对的",onFocus:"用户名至少5个字符,最多10个字符",onCorrect:"该用户名可以注册"}).inputValidator({min:5,max:10,onError:"你输入的用户名非法,请确认"})//.regexValidator({regExp:"username",dataType:"enum",onError:"用户名格式不正确"})
  //     .ajaxValidator({
  //   dataType : "html",
  //   async : true,
  //   url : "http://www.51gh.net/chkuser.aspx?act=ok",
  //   success : function(data){
  //           if( data.indexOf("此用户名可以注册!") > 0 ) return true;
  //           if( data.indexOf("此用户名已存在,请填写其它用户名!") > 0 ) return false;
  //     return false;
  //   },
  //   buttons: $("#button"),
  //   error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
  //   onError : "该用户名不可用，请更换用户名",
  //   onWait : "正在对用户名进行合法性校验，请稍候..."
  // }).defaultPassed();;
  $("#password1").formValidator({onShow:"请输入密码",onFocus:"至少1个长度",onCorrect:"密码合法"}).inputValidator({min:1,empty:{leftEmpty:false,rightEmpty:false,emptyError:"密码两边不能有空符号"},onError:"密码不能为空,请确认"});
});
</script>