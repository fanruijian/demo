<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
// $this->registerCssFile("@web/js/jquery.js");
// $this->registerCssFile("@web/css/jquery.dataTables.min.css");
// $this->registerJsFile("@web/js/jquery.dataTables.min.js");  
?>
<style>
    #example_filter  input{border: 1px solid #ccc;}
    #example_filter  input:focus{border: 1px solid blue;}
</style>
<div>  
    <table id="example" class="table table-hover table-striped table-bordered table-condensed">  
      <thead>  
        <th>姓名</th>  
        <th>位置</th>  
         <th>年龄</th>  
         <th>薪水</th>  
      </thead>  
      <tbody>  
        <tr>  
          <td>1张三</td>  
          <td>北京</td>  
          <th>23</th>  
          <th>￥5000</th>  
        </tr>  
        <tr>  
          <td>2李四</td>  
          <td>上海</td>  
          <th>24</th>  
          <th>￥4000</th>  
        </tr>  
        <tr>  
          <td>3王五</td>  
          <td>广州</td>  
          <th>25</th>  
          <th>￥7000</th>  
        </tr>  
        <tr>  
          <td>4赵六</td>  
          <td>深圳</td>  
          <th>26</th>  
          <th>￥10000</th>  
        </tr>  
        <tr>  
          <td>5赵六</td>  
          <td>深圳</td>  
          <th>27</th>  
          <th>￥10000</th>  
        </tr>  
        <tr>  
          <td>6赵六</td>  
          <td>深圳</td>  
          <th>28</th>  
          <th>￥10000</th>  
        </tr>  
        <tr>  
          <td>7赵六</td>  
          <td>深圳</td>  
          <th>29</th>  
          <th>￥10000</th>  
        </tr>  
      </tbody>  
    </table>  
</div>
<script type="text/javascript">
  $(document).ready(function() {
    alert("hello,fan");
    $('#example').DataTable({
      "oLanguage" : {
                "sZeroRecords": "抱歉， 没有找到",
                "sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
                "sInfoEmpty": "没有数据",
                "sInfoFiltered": "(从 _MAX_ 条数据中检索)",
                "sZeroRecords": "没有检索到数据",
                "sSearch": "搜索:",
                "sLengthMenu": "每页显示 _MENU_ 条记录",
                "oPaginate": {
                "sFirst": "首页",
                "sPrevious": "前一页",
                "sNext": "后一页",
                "sLast": "尾页"
                }
                     
            }
    });

} );  
</script>
