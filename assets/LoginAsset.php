<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $css = [
        'css/jquery.dataTables.min.css',
        'css/bootstrap.min.css'
    ];
    public $js = [
        'js/jquery.js',
        'js/jquery.dataTables.min.js',
        'js/formValidator.js',
        'js/formValidatorRegex.js',
        'js/bootstrap.min.js'
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
