<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
// $this->registerCssFile("@web/js/jquery.js");
// $this->registerCssFile("@web/css/jquery.dataTables.min.css");
// $this->registerJsFile("@web/js/jquery.dataTables.min.js");  
?>
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
    $('#example').DataTable();
} );  
</script>
