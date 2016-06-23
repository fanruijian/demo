<?php
namespace app\traits;
use Yii;

trait HierarchyTrait {
    public function t($category, $message, $params = [], $language = null ) {
        return \Yii::t($category, $message, $params, $language); 
    }

	public function getSiteBaseUrl() {
        //return \Yii::$app->params['ssp']['vamaker']['domain'].'/uploads/'.$name;
        $HOST = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'];
        //$HOST = $_SERVER['REQUEST_SCHEME'].'://img.sacrebleu.cn';
        $URI = $_SERVER['REQUEST_URI'];
        $URI = strstr($URI, '?', true);
        $parts = explode('/', $URI);
        array_pop($parts);
        array_pop($parts);
        $URI = implode('/', $parts);
        $ASK = $HOST.$URI;
        //$PIC = '/creative/get-material-picture?name='.$name;
        $PIC = '';

        return $ASK.$PIC;
    }

    /**
     * 获取主域名
     */
    public function getAdomain($urls) {
        $urls = explode(';', $urls);
        $domains = [];
        foreach ($urls as $url) {
            $host = parse_url($url, PHP_URL_HOST);
            if (!$host) $host = parse_url($url, PHP_URL_PATH);
            $domains[] = str_replace('www.', '', $host);
        }
        return implode($domains, ';');
    }

        /**
    * 生成随机值    $length 生成随机值的长度，$condition 随机值的条件
    *      
    */
    public function randString ($length, $condition = 0) {
        switch ($condition) {       // $condition: 1: 纯数字, 2: 纯字母，其他默认混合
            case 1:
                $strPol = "0123456789";
                break;
            case 2:
                $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
                break;
            default:
                $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
                break;
        }
        $str = null;
        $max = strlen($strPol) - 1;
        for($i=0;$i<$length;$i++) {
            $str.=$strPol[rand(0,$max)];
        }

        return $str;
    }

    /**
    * 提取controller 和 service 的名字作为 category
    */
    public function makePath($classPath, $actionPath, & $category) {
        if ($subPath = strrchr($classPath, '\\')) {
            $category = substr($subPath, 1)."_{$actionPath}";
        } else {
            $category = $classPath."_{$actionPath}";
        }
    }
    
    /*
    * 写入日志文件
    */
    public function log($logmessage, $category='', $level = \yii\log\Logger::LEVEL_INFO) {
        if (empty($category)) {
            $path = debug_backtrace();
            $path = array_reverse($path);
            foreach ($path as $key => $value) {
                if (isset($value['class'])) {
                    if (stripos($value['class'], 'services')) {
                        break;
                    }
                }
            }
            $this->makePath($value['class'], $value['function'], $category);
        }
        $service = new \app\services\LogService();
        $service->setFileLog($logmessage, $category, $level);
    }

    public function setJsDir() {
        return true;
        \Yii::$app->language = $this->s('language');
        $env = strstr(\Yii::$app->params['envDir'],"/",true); 
        if(!$env) {
            \Yii::$app->params['envDir'] = \Yii::$app->params['envDir'].'/js/'.strtolower(\Yii::$app->language);
        } else {
            \Yii::$app->params['envDir'] = $env.'/js/'.strtolower(\Yii::$app->language);
        }
    }

    public function setLangConfig($lang) {
        $this->S('language',$lang);
        $this->Cookie('language', $lang);
        \Yii::$app->language = $lang;
    }
    
    /**
     * Returns message file path for the specified language and category.
     *
     * @param string $category the message category
     * @param string $language the target language
     * @return string path to message file
     */
    public function getMessageFilePath($category, $language)
    {
        $basePath = '@app/messages';
        $messageFile = \Yii::getAlias($basePath) . "/$language/";
        //if (isset($this->fileMap[$category])) {
            //$messageFile .= $this->fileMap[$category];
        //} else {
            $messageFile .= str_replace('\\', '/', $category) . '.php';
        //}

        return $messageFile;
    }

    /**
     * fronend js i18n files
     */
    public function getFrontendMessageFilePath($category, $language)
    {
        $basePath = '@app/messages';
        $messageFile = \Yii::getAlias($basePath) . "/$language/frontend/";
        $messageFile .= str_replace('\\', '/', $category) . '.php';
        return $messageFile;
    }

    /**
     * Loads the message translation for the specified language and category or returns null if file doesn't exist.
     *
     * @param $messageFile string path to message file
     * @return array|null array of messages or null if file not found
     */
    public function loadMessagesFromFile($messageFile)
    {
        if (is_file($messageFile)) {
            $messages = include($messageFile);
            if (!is_array($messages)) {
                $messages = [];
            }
            return $messages;
        } else {
            return [];
        }
    }
}//eof 
