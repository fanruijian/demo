<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\org\Fan;
use yii\helpers\Url as U;
class HomeController extends Controller
{
    public function actionAaa(){
        echo 'aaa';
    }
    public function actionTest(){
        $fan = new Fan();
        $fan->say();
    }

    public function actionBbb(){
    	$name = 'uuu';
    	$this->check($name);
    }

    public function check($name,$key='kkk'){
    	echo $name.$key;
    }

    public function getDistance($lat1, $lng1, $lat2, $lng2){
         $earthRadius = 6367000; //approximate radius of earth in meters

         /*
           Convert these degrees to radians
           to work with the formula
         */

         $lat1 = ($lat1 * pi() ) / 180;
         $lng1 = ($lng1 * pi() ) / 180;

         $lat2 = ($lat2 * pi() ) / 180;
         $lng2 = ($lng2 * pi() ) / 180;

         /*
           Using the
           Haversine formula

           http://en.wikipedia.org/wiki/Haversine_formula

           calculate the distance
         */

         $calcLongitude = $lng2 - $lng1;
         $calcLatitude = $lat2 - $lat1;
         $stepOne = pow(sin($calcLatitude / 2), 2) + cos($lat1) * cos($lat2) * pow(sin($calcLongitude / 2), 2);  $stepTwo = 2 * asin(min(1, sqrt($stepOne)));
         $calculatedDistance = $earthRadius * $stepTwo;

         return round($calculatedDistance);
    }

    public function actionCcc(){
        $lat1 = 34.296210293843004;
        $lng1 = 108.95961981580474;
        $lat2 = 34.25351296427118;
        $lng2 = 108.89670592115142;
        $distance = $this->getDistance($lat1, $lng1, $lat2, $lng2);
        var_dump($distance);
    }

    public function actionKkk(){
        $filePath = '/home/frj/www/demo/ppp.xls'; // 要读取的文件的路径
        $PHPExcel = new \PHPExcel();
        $objPHPExcel = \PHPExcel_IOFactory::load($filePath);
        $currentSheet = $objPHPExcel->getSheet(0);
        $total_line = $currentSheet->getHighestRow();  
        $total_column = $currentSheet->getHighestColumn();  

        for ($row = 2; $row <= $total_line; $row++) {  
            $data = array();  
            for ($column = 'A'; $column <= $total_column; $column++) {  
                $data[] = trim($currentSheet->getCell($column.$row) -> getValue());  
            }  
        }
        var_dump($data);
    }

    public function actionNnn(){
        $cache = \Yii::$app->cache;  
        $cache->set('name','fan',5);
        sleep(3);
        $p = $cache->get('name');
        var_dump($p);

    }

    public function actionList(){
        return $this->render('list');
    }

    public function actionMail(){
        $mail= Yii::$app->mailer->compose('aaa',['name'=>'fan','age'=>5]);   
        $mail->setTo("ruijian.fan@vamaker.com");  
        $mail->setSubject("邮件测试");  
        //$mail->setTextBody('zheshisha ');   //发布纯文字文本
        // $mail->setHtmlBody("<br>问我我我我我");    //发布可以带html标签的文本
        if($mail->send())  
            echo "success";  
        else  
            echo "failse";   
        die(); 
    }

    public function actionDiff(){
        $arr1 = ['name'=>'fan','age'=>'23','love'=>'xixi'];
        $arr2 = [];
        $arr3 = array_merge($arr1,$arr2);
        var_dump($arr3);
    }

    public function getDiffData($oldData,$newData,$addKey,$delKey){
        $dataDiff = array_diff($oldData,$newData);
        $keyDiff = array_keys($dataDiff);
        $keyDiff = array_merge($keyDiff,$addKey);
        foreach ($oldData as $k1 => $v1) {
            if(!in_array($k1,$keyDiff) || in_array($k1,$delKey)){
                unset($oldData[$k1]);
            }
        }
        foreach ($newData as $k2 => $v2) {
            if(!in_array($k2,$keyDiff) || in_array($k2,$delKey)){
                unset($newData[$k2]);
            }
        }
        return [
            'oldData' => $oldData,
            'newData' => $newData
        ];

    }


    public function actionEee(){
        $arr1 = ['id'=>'1','name'=>'fan','age'=>'26','last_update'=>'2016'];
        $arr2 = ['id'=>'2','name'=>'fan','age'=>'25','last_update'=>'2015'];
        $p = $this->getDiffData($arr1,$arr2,['name'],[]);
        var_dump($p);
    }


    public function actionIndex(){
        return $this->render('index');
    }

    
}
